<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Stock;

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

    public function getUserOrders()
    {
        $user = Auth::user();
        $orders = $user->orders;
        return view('customers.pages.account', compact('orders'));
    }

    public function saveOrUpdateOrder($productId, $quantity)
    {
        $userId = auth()->user()->id; // Get the authenticated user ID

        // Check if there is an existing pending order for the user
        $order = Order::where('user_id', $userId)->where('status', 'pending')->first();

        // If there is no existing order, create a new one
        if (!$order) {
            $order = new Order([
                'user_id' => $userId,
                'total_price' => 0,
            ]);
            $order->save();
        }

        // Check the stock for the requested product and quantity
        $stock = Stock::where('product_id', $productId)->first();

        if ($stock && $stock->quantity >= $quantity) {
            // If there is enough stock, create or update the order item
            $orderItem = OrderItem::where('order_id', $order->id)->where('product_id', $productId)->first();
            $product = Product::find($productId);

            if ($orderItem) {

                $order->total_price -= $orderItem->quantity * $product->price;
                $orderItem->quantity = $quantity;
            } else {
                $orderItem = new OrderItem([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                ]);
            }

            $order->total_price += $quantity * $product->price;
            $order->save();
            $orderItem->save();

            // Update the stock quantity
            $stock->quantity -= $quantity;
            $stock->save();

            return response()->json(['success' => 'Order updated successfully', 'order_id' => $order->id]);
        } else {
            return response()->json(['error' => 'Not enough stock for the requested product'], 400);
        }
    }
}
