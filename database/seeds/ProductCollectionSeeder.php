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
            ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
