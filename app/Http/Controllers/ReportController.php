<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __invoke()
    {
        // Get total sales
        $totalSales = Order::where('status', '!=', 'pending')
            ->sum('total_price');

        // Get total orders
        $totalOrders = Order::count();

        // Get top-selling products
        $topSellingProducts = Product::withCount('orderItems')
            ->orderBy('order_items_count', 'desc')
            ->take(5)
            ->get();

        // Pass the data to the view
        return view('pages.report', compact('totalSales', 'totalOrders', 'topSellingProducts'));
    }

    public function getSalesData(Request $request)
    {
        $groupBy = $request->input('group_by', 'daily');
        $startDate = $request->input('start_date', now()->subMonths(1)->toDateString());
        $endDate = $request->input('end_date', now()->toDateString());

        $query = DB::table('orders')
            ->selectRaw('SUM(total_price) as sales')
            ->whereBetween('created_at', [$startDate, $endDate]);

        switch ($groupBy) {
            case 'daily':
                $query->selectRaw('DATE(created_at) as date')
                    ->groupBy(DB::raw('DATE(created_at)'));
                break;
            case 'monthly':
                $query->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year')
                    ->groupBy(DB::raw('MONTH(created_at), YEAR(created_at)'));
                break;
            case 'yearly':
                $query->selectRaw('YEAR(created_at) as year')
                    ->groupBy(DB::raw('YEAR(created_at)'));
                break;
        }

        $salesData = $query->get();

        return response()->json($salesData);
    }
}
