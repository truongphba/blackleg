<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(CollectionSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ProductSizeSeeder::class);
        $this->call(ProductCollectionSeeder::class);
    }
}
