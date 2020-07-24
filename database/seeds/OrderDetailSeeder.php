<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'id' => 1,
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'unit_price' => 510000
            ],
            [
                'id' => 2,
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'unit_price' => 1215000
            ],
            [
                'id' => 3,
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 1,
                'unit_price' => 1215000
            ],
            [
                'id' => 4,
                'order_id' => 2,
                'product_id' => 3,
                'quantity' => 1,
                'unit_price' => 745000
            ],
            [
                'id' => 5,
                'order_id' => 3,
                'product_id' => 3,
                'quantity' => 1,
                'unit_price' => 745000
            ],
            [
                'id' => 6,
                'order_id' => 3,
                'product_id' => 4,
                'quantity' => 2,
                'unit_price' => 745000
            ],
            [
                'id' => 7,
                'order_id' => 4,
                'product_id' => 4,
                'quantity' => 1,
                'unit_price' => 745000
            ],
            [
                'id' => 8,
                'order_id' => 4,
                'product_id' => 1,
                'quantity' => 1,
                'unit_price' => 510000
            ],
            [
                'id' => 9,
                'order_id' => 5,
                'product_id' => 2,
                'quantity' => 1,
                'unit_price' => 1215000
            ],
            [
                'id' => 10,
                'order_id' => 5,
                'product_id' => 5,
                'quantity' => 1,
                'unit_price' => 1397000
            ],
            [
                'id' => 11,
                'order_id' => 6,
                'product_id' => 6,
                'quantity' => 1,
                'unit_price' => 1397000
            ],
            [
                'id' => 12,
                'order_id' => 6,
                'product_id' => 7,
                'quantity' => 1,
                'unit_price' => 990000
            ],
            [
                'id' => 13,
                'order_id' => 6,
                'product_id' => 5,
                'quantity' => 1,
                'unit_price' => 1397000
            ],
            [
                'id' => 14,
                'order_id' => 7,
                'product_id' => 5,
                'quantity' => 1,
                'unit_price' => 1397000
            ],
            [
                'id' => 15,
                'order_id' => 7,
                'product_id' => 8,
                'quantity' => 1,
                'unit_price' => 495000
            ],
            [
                'id' => 16,
                'order_id' => 7,
                'product_id' => 11,
                'quantity' => 1,
                'unit_price' => 1750000
            ],
            [
                'id' => 17,
                'order_id' => 7,
                'product_id' => 14,
                'quantity' => 1,
                'unit_price' => 1750000
            ],
            [
                'id' => 18,
                'order_id' => 8,
                'product_id' => 14,
                'quantity' => 1,
                'unit_price' => 1750000
            ],
            [
                'id' => 19,
                'order_id' => 8,
                'product_id' => 15,
                'quantity' => 1,
                'unit_price' => 1560000
            ],
            [
                'id' => 20,
                'order_id' => 8,
                'product_id' => 17,
                'quantity' => 1,
                'unit_price' => 790000
            ],
            [
                'id' => 21,
                'order_id' => 8,
                'product_id' => 18,
                'quantity' => 1,
                'unit_price' => 790000
            ],
            [
                'id' => 22,
                'order_id' => 8,
                'product_id' => 6,
                'quantity' => 1,
                'unit_price' => 1397000
            ],
            [
                'id' => 23,
                'order_id' => 9,
                'product_id' => 6,
                'quantity' => 1,
                'unit_price' => 1397000
            ],
            [
                'id' => 24,
                'order_id' => 9,
                'product_id' => 17,
                'quantity' => 1,
                'unit_price' => 790000
            ],
            [
                'id' => 25,
                'order_id' => 9,
                'product_id' => 12,
                'quantity' => 1,
                'unit_price' => 1860000
            ],
            [
                'id' => 26,
                'order_id' => 10,
                'product_id' => 12,
                'quantity' => 1,
                'unit_price' => 1860000
            ],
            [
                'id' => 27,
                'order_id' => 10,
                'product_id' => 1,
                'quantity' => 3,
                'unit_price' => 510000
            ],
            [
                'id' => 28,
                'order_id' => 10,
                'product_id' => 13,
                'quantity' => 1,
                'unit_price' => 1890000
            ],
            [
                'id' => 29,
                'order_id' => 10,
                'product_id' => 15,
                'quantity' => 1,
                'unit_price' => 1560000
            ],
            [
                'id' => 30,
                'order_id' => 10,
                'product_id' => 2,
                'quantity' => 1,
                'unit_price' => 1215000
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
