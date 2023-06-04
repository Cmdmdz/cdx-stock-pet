<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __invoke()
    {
        $orders = Order::with(['orderItems', 'orderItems.product', 'user'])->get();
        return view('pages.order', compact('orders'));;
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('/admin/order')->with('success', 'Order deleted successfully.');
    }

    public function findOrderItemByUserAuthAndStatus()
    {
        $user = auth()->user();

        $order = Order::where('user_id', $user->id)
            ->where('status', 'pending')
            ->first();

        $message = null;

        if (!$order) {
            $message = 'No pending orders found for the user.';
        } else {
            $orderItems = OrderItem::where('order_id', $order->id)->get();

            if ($orderItems->isEmpty()) {
                $message = 'No items found for the pending order.';
            }
        }

        return view('customers.pages.cart', compact('order', 'message'));
    }


    public function getUserOrders()
    {
        $user = auth::user();
        $orders = $user->orders;
        return view('customers.pages.account', compact('orders'));
    }

    public function saveOrUpdateOrderItem($productId, $quantity)
    {
        $userId = auth::id(); // Get the authenticated user's ID

        // 1. Check for existing order with 'pending' status
        $order = Order::where('user_id', $userId)->where('status', 'pending')->first();

        // 1.1 If no such order exists, create a new one
        if (!$order) {
            $order = Order::create([
                'user_id' => $userId,
                'total_price' => 0, // Will be updated later
                'status' => 'pending',
            ]);
        }

        // 2. Check if the requested quantity is available in stock
        $stock = Stock::where('product_id', $productId)->first();

        if (!$stock || $stock->quantity < $quantity) {
            // Throw an error or handle this situation accordingly
            throw new Exception('Not enough stock available');
        }

        // 3. Find existing order item with given productId
        $orderItem = OrderItem::where('order_id', $order->id)
            ->where('product_id', $productId)
            ->first();

        $product = Product::find($productId);
        if(!$product) {
            throw new Exception('Product does not exist');
        }

        $productPrice = $product->price;
        if(!$productPrice) {
            throw new Exception('Product price is not set');
        }

        // Calculate discounted price
        $discountedPrice = $productPrice - ($productPrice * $product->discount / 100);

        // 3.1 If no such order item exists, create a new one
        if (!$orderItem) {
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $quantity,
                'price' => $discountedPrice,
                'total_price_item' => $discountedPrice * $quantity, // calculate total price

            ]);
        }
        // 3.2 If order item exists, update it
        else {
            $orderItem->quantity += $quantity;
            $orderItem->total_price_item += $discountedPrice * $quantity; // calculate total price

            $orderItem->save();
        }

        // 4. Update the total price in the order
        $order->total_price += $orderItem->price * $quantity;
        $order->save();

        // 5. Update the stock
        $stock->quantity -= $quantity;
        $stock->save();

        return redirect()->route('cart');

    }


    public function clearCart() {
        // Assuming user is authenticated and you have an 'id' attribute in your order
        $userId = auth::id(); // Get the authenticated user's ID
        $order = Order::where('user_id', $userId)->where('status', 'pending')->first();

        // Fetch the orderItems belonging to this order
        $orderItems = DB::table('order_items')->where('order_id', $order->id)->get();

        // For each orderItem, restore the product quantity in stock
        foreach($orderItems as $orderItem) {
            $stock = DB::table('stocks')->where('product_id', $orderItem->product_id)->first();
            DB::table('stocks')->where('product_id', $orderItem->product_id)->update(['quantity' => $stock->quantity + $orderItem->quantity]);
        }

        // Now delete the orderItems
        DB::table('order_items')->where('order_id', $order->id)->delete();

        // And the order itself
        DB::table('orders')->where('id', $order->id)->delete();

        return redirect()->route('cart');
    }

    public function deleteOrderItemById($id){
        // Fetch the orderItem
        $orderItem = DB::table('order_items')->where('id', $id)->first();

        // Restore the product quantity in stock
        $stock = DB::table('stocks')->where('product_id', $orderItem->product_id)->first();
        DB::table('stocks')->where('product_id', $orderItem->product_id)->update(['quantity' => $stock->quantity + $orderItem->quantity]);

        // Now delete the orderItem
        DB::table('order_items')->where('id', $id)->delete();

        return redirect()->route('cart');
    }



}
