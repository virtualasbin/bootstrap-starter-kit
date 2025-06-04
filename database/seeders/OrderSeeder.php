<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create(['order_name' => 'Pizza', 'price' => 12.99]);
        Order::create(['order_name' => 'Burger', 'price' => 8.99]);
        Order::create(['order_name' => 'Pasta', 'price' => 10.50]);
    }
}
