<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Mahyudin',
            'email' => 'mahyudin@gmail.com',
            'name_toko' => 'Toko Kelontong Admin',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);
    }
}
