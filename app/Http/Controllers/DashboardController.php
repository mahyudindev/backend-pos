<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Penjualan hari ini
        $todaySales = Order::whereDate('transaction_time', Carbon::today())->sum('total');

        // Penjualan minggu ini
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $weeklySales = Order::whereBetween('transaction_time', [$startOfWeek, $endOfWeek])->sum('total');

        // Penjualan bulan ini (termasuk penjualan hari ini)
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $monthlySales = Order::where('transaction_time', '>=', $startOfMonth)
                        ->where('transaction_time', '<=', Carbon::today())
                        ->sum('total');

        return view('pages.dashboard', compact('todaySales', 'weeklySales', 'monthlySales'));
    }
}
