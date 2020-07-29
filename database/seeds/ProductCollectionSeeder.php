<?php

use Illuminate\Database\Seeder;

class ProductCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('product_collection')->truncate();
        DB::table('product_collection')->insert([
            [
                'product_id' => 1,
                'collection_id' => 1,
            ],
            [
                'product_id' => 2,
                'collection_id' => 1,
            ],
            [
                'product_id' => 3,
                'collection_id' => 1,
            ],
            [
                'product_id' => 4,
                'collection_id' => 1,
            ],
            [
                'product_id' => 5,
                'collection_id' => 1,
            ],
            [
                'product_id' => 6,
                'collection_id' => 1,
            ],
            [
                'product_id' => 7,
                'collection_id' => 1,
            ],
            [
                'product_id' => 8,
                'collection_id' => 1,
            ],
            [
                'product_id' => 9,
                'collection_id' => 2,
            ],
            [
                'product_id' => 10,
                'collection_id' => 2,
            ],
            [
                'product_id' => 11,
                'collection_id' => 2,
            ],
            [
                'product_id' => 12,
                'collection_id' => 2,
            ],
            [
                'product_id' => 13,
                'collection_id' => 2,
            ],
            [
                'product_id' => 14,
                'collection_id' => 2
            ],
            [
                'product_id' => 15,
                'collection_id' => 2,
            ],
            [
                'product_id' => 16,
                'collection_id' => 2,
            ],
            [
                'product_id' => 17,
                'collection_id' => 2,
            ],
            [
                'product_id' => 18,
                'collection_id' => 2,
            ],
            [
                'product_id' => 19,
                'collection_id' => 3,
            ],
            [
                'product_id' => 20,
                'collection_id' => 3,
            ],
            [
                'product_id' => 21,
                'collection_id' => 3,
            ],
            [
                'product_id' => 22,
                'collection_id' => 3,
            ],
            [
                'product_id' => 23,
                'collection_id' => 3,
            ],
            [
                'product_id' => 24,
                'collection_id' => 3,
            ],
            [
                'product_id' => 25,
                'collection_id' => 3,
            ],
            [
                'product_id' => 26,
                'collection_id' => 4,
            ],
            [
                'product_id' => 27,
                'collection_id' => 4,
            ],
            [
                'product_id' => 28,
                'collection_id' => 4,
            ],
            [
                'product_id' => 29,
                'collection_id' => 4,
            ],
            [
                'product_id' => 30,
                'collection_id' => 4,
            ],
            [
                'product_id' => 31,
                'collection_id' => 4,
            ],
            [
                'product_id' => 32,
                'collection_id' => 4,
            ],
            [
                'product_id' => 33,
                'collection_id' => 5,
            ],
            [
                'product_id' => 34,
                'collection_id' => 5,
            ],
            [
                'product_id' => 35,
                'collection_id' => 5,
            ],
            [
                'product_id' => 36,
                'collection_id' => 5,
            ],
            [
                'product_id' => 37,
                'collection_id' => 5,
            ],
            [
                'product_id' => 38,
                'collection_id' => 5,
            ],
            [
                'product_id' => 39,
                'collection_id' => 5,
            ],
            [
                'product_id' => 40,
                'collection_id' => 5,
            ],
            ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
