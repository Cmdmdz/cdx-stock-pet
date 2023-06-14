<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->middleware(['guest'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/',  CustomerController::class)->name('customer.view');
Route::get('/register',  RegisterController::class)->name('customer.register');
Route::get('/login',  AuthController::class)->name('customer.login');
Route::post('/login', [AuthController::class, 'customerLogin'])->name('customer.login');

Route::get('/contact',  function () {
    return view('customers.pages.contact');
});




Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admin',  DashboardController::class)->name('dashboard');
    Route::get('/admin/order', OrderController::class)->name('order');
    Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

    Route::get('/admin/report', ReportController::class)->name('report');
    Route::get('/admin/sales-data', [ReportController::class, 'getSalesData'])->name('sales-data');

    //product
    Route::get('/admin/product', ProductController::class)->name('product');
    Route::post('/admin/product', [ProductController::class, 'store'])->name('products.store');
    Route::get('/admin/product-edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/admin/product/{id}', [ProductController::class, 'show']);
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::put('/admin/product/{id}', [ProductController::class, 'update'])->name('products.update');
});

Route::group(['middleware' => ['auth', 'checkRole:user']], function () {
    // Your user routes here
//     Route::get('/cart',  function () {
//         return view('customers.pages.cart');
//     });
    Route::get('/account', [CustomerController::class, 'getDataByAccount'])->name('user.fullname');
    Route::get('/cart', [OrderController::class, 'findOrderItemByUserAuthAndStatus'])->name('cart');
    Route::post('/order/saveOrUpdate/{productId}/{quantity}', [OrderController::class, 'saveOrUpdateOrderItem'])->name('order.store');
    // Route::get('/account/orders', [OrderController::class, 'getUserOrders'])->name('account.orders');
    Route::get('/clear-cart', [OrderController::class, 'clearCart'])->name('order.clearCart');
    Route::get('/delete-order-item/{id}', [OrderController::class, 'deleteOrderItemById'])->name('delete-order');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('check-index');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');

});

Route::get('/is-logged-in', function () {
    return response()->json([
        'loggedIn' => Auth::check(),
    ]);
});


Route::get('/product/{id}', [ProductController::class, 'showProductOnCustomer']);
Route::get('/shop', function () {
    return view('customers.pages.shop');
});

Route::get('/about', function () {
    return view('customers.pages.about');
});
