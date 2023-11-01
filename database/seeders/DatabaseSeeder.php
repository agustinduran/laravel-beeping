<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\OrdersSeeder;
use Database\Seeders\OrdersLinesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductsSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrdersLinesSeeder::class);
    }
}
