<?php

namespace App\Http\Controllers;

use App\Models\Order; // Tambahkan ini untuk mengimpor model Order
use Carbon\Carbon; // Jika Anda menggunakan Carbon, tambahkan ini juga
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $todaySales = Order::whereDate('transaction_time', Carbon::today())->sum('total');
        return view('pages.dashboard', compact('todaySales'));
    }
}

