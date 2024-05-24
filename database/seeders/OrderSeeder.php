<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all existing records
        DB::table('orders')->delete();

        // Create orders for today
        for ($i = 0; $i < 1; $i++) {
            Order::create([
                'payment_amount' => rand(100000, 200000),
                'sub_total' => rand(90000, 180000),
                'tax' => rand(10000, 20000),
                'discount' => rand(0, 1),
                'discount_amount' => rand(0, 10000),
                'service_charge' => rand(5000, 15000),
                'total' => rand(100000, 200000),
                'payment_method' => 'cash',
                'total_item' => rand(1, 10),
                'id_kasir' => 1,
                'nama_kasir' => 'H.Odeng',
                'transaction_time' => Carbon::today(),
            ]);
        }

        // Create orders for previous days
        // for ($i = 0; $i < 10; $i++) {
        //     Order::create([
        //         'payment_amount' => rand(100000, 200000),
        //         'sub_total' => rand(90000, 180000),
        //         'tax' => rand(10000, 20000),
        //         'discount' => rand(0, 1),
        //         'discount_amount' => rand(0, 10000),
        //         'service_charge' => rand(5000, 15000),
        //         'total' => rand(100000, 200000),
        //         'payment_method' => 'cash',
        //         'total_item' => rand(1, 10),
        //         'id_kasir' => 1,
        //         'nama_kasir' => 'John Doe',
        //         'transaction_time' => Carbon::yesterday(),
        //     ]);
        // }
    }
}
