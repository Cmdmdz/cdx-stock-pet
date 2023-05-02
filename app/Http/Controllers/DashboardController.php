<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $today = Carbon::today();
        $nonAdminUsers = User::where('role', '<>', 'admin')->get();
        $newOrders = Order::whereDate('created_at', $today)->count();
        $rejectedOrders = Order::where('status', 'reject')->count();
        $totalOrders = Order::count();
        $bounceRate = $totalOrders > 0 ? round(($rejectedOrders / $totalOrders) * 100, 2) : 0;
        $userRegistrations = User::where('role', 'user')->count(); // Count users with role 'user'
        $todaysSales = Order::whereDate('created_at', $today)->where('status', '!=', 'pending')->sum('total_price');

        return view('pages.dashboard', compact('newOrders', 'bounceRate', 'userRegistrations', 'todaysSales','nonAdminUsers'));
    }
}
