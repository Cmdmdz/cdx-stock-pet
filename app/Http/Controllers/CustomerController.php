<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __invoke()
    {
        $products = Product::with('stock')->get();
        return view('customers.pages.home', compact('products'));
    }

    public function getDataByAccount()
    {
        $user = Auth::user();
        $fullName = $user->first_name . ' ' . $user->last_name;
        $user = Auth::user();
        $orders = $user->orders;

        return view('customers.pages.account', compact('orders', 'fullName'));
    }

    public function viewOrder($id)
    {
        $user = Auth::user();
        $order = $user->orders()->with('orderItems.product')->where('id', $id)->first();

        if (!$order) {
            return redirect()->route('account.orders')->with('error', 'Order not found.');
        }

        return view('customers.pages.cart', compact('order'));
    }


}
