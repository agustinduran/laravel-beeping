<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrdersLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $productIds = DB::table('products')->pluck('id')->toArray();

        $orderIds = DB::table('orders')->pluck('id')->toArray();

        foreach ($orderIds as $orderId) {
            foreach (range(1, $faker->numberBetween(1, 3)) as $index) { // 1-3 lineas por orden
                DB::table('orders_lines')->insert([
                    'order_id' => $orderId,
                    'qty' => $faker->numberBetween(1, 5),
                    'product_id' => $faker->randomElement($productIds),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
