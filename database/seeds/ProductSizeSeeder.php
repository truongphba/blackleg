<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('product_size')->truncate();
        DB::table('product_size')->insert([
            [
                'product_id' => 1,
                'size_id' => 1,
                'quantity' => 5,

            ],
            [
                'product_id' => 1,
                'size_id' => 2,
                'quantity' => 5,
            ],
            [
                'product_id' => 1,
                'size_id' => 3,
                'quantity' => 4,
            ],
            [
                'product_id' => 1,
                'size_id' => 4,
                'quantity' => 5,
            ],
            [
                'product_id' => 2,
                'size_id' => 1,
                'quantity' => 7,

            ],
            [
                'product_id' => 2,
                'size_id' => 2,
                'quantity' => 2,
            ],
            [
                'product_id' => 2,
                'size_id' => 3,
                'quantity' => 1,
            ],
            [
                'product_id' => 2,
                'size_id' => 4,
                'quantity' => 3,
            ],
            [
                'product_id' => 3,
                'size_id' => 2,
                'quantity' => 3,
            ],
            [
                'product_id' => 3,
                'size_id' => 3,
                'quantity' => 3,
            ],
            [
                'product_id' => 4,
                'size_id' => 1,
                'quantity' => 2,
            ],
            [
                'product_id' => 4,
                'size_id' => 2,
                'quantity' => 4,
            ],
            [
                'product_id' => 4,
                'size_id' => 3,
                'quantity' => 3,
            ],
            [
                'product_id' => 5,
                'size_id' => 1,
                'quantity' => 2,
            ],
            [
                'product_id' => 5,
                'size_id' => 2,
                'quantity' => 3,
            ],
            [
                'product_id' => 5,
                'size_id' => 3,
                'quantity' => 1,
            ],
            [
                'product_id' => 5,
                'size_id' => 4,
                'quantity' => 5,
            ],
            [
                'product_id' => 6,
                'size_id' => 4,
                'quantity' => 2,
            ],
            [
                'product_id' => 6,
                'size_id' => 2,
                'quantity' => 1,
            ],
            [
                'product_id' => 6,
                'size_id' => 3,
                'quantity' => 3,
            ],
            [
                'product_id' => 7,
                'size_id' => 3,
                'quantity' => 2,
            ],
            [
                'product_id' => 7,
                'size_id' => 1,
                'quantity' => 6,
            ],
            [
                'product_id' => 7,
                'size_id' => 2,
                'quantity' => 3,
            ],
            [
                'product_id' => 8,
                'size_id' => 1,
                'quantity' => 2,
            ],
            [
                'product_id' => 8,
                'size_id' => 2,
                'quantity' => 4,
            ],
            [
                'product_id' => 8,
                'size_id' => 3,
                'quantity' => 3,
            ],
            [
                'product_id' => 8,
                'size_id' => 4,
                'quantity' => 3,
            ],
            [
                'product_id' => 9,
                'size_id' => 1,
                'quantity' => 2,
            ],
            [
                'product_id' => 10,
                'size_id' => 1,
                'quantity' => 1,
            ],
            [
                'product_id' => 10,
                'size_id' => 2,
                'quantity' => 1,
            ],
            [
                'product_id' => 11,
                'size_id' => 1,
                'quantity' => 5,
            ],
            [
                'product_id' => 12,
                'size_id' => 2,
                'quantity' => 6,
            ],
            [
                'product_id' => 13,
                'size_id' => 1,
                'quantity' => 2,
            ],
            [
                'product_id' => 13,
                'size_id' => 2,
                'quantity' => 4,
            ],
            [
                'product_id' => 13,
                'size_id' => 3,
                'quantity' => 6,
            ],
            [
                'product_id' => 14,
                'size_id' => 2,
                'quantity' => 4,
            ],
            [
                'product_id' => 15,
                'size_id' => 1,
                'quantity' => 4,
            ],
            [
                'product_id' => 15,
                'size_id' => 2,
                'quantity' => 6,
            ],
            [
                'product_id' => 15,
                'size_id' => 3,
                'quantity' => 3,
            ],
            [
                'product_id' => 15,
                'size_id' => 4,
                'quantity' => 3,
            ],
            [
                'product_id' => 16,
                'size_id' => 1,
                'quantity' => 6,
            ],
            [
                'product_id' => 16,
                'size_id' => 2,
                'quantity' => 2,
            ],
            [
                'product_id' => 16,
                'size_id' => 3,
                'quantity' => 4,
            ],
            [
                'product_id' => 17,
                'size_id' => 2,
                'quantity' => 4,
            ],
            [
                'product_id' => 18,
                'size_id' => 1,
                'quantity' => 5,
            ],
            [
                'product_id' => 18,
                'size_id' => 2,
                'quantity' => 5,
            ],
            [
                'product_id' => 18,
                'size_id' => 3,
                'quantity' => 6,
            ],
            [
                'product_id' => 18,
                'size_id' => 4,
                'quantity' => 2,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
