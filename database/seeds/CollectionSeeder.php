<?php

use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('collections')->truncate();
        DB::table('collections')->insert([
            [
                'id' => 1,
                'name' => 'Clara Mare',
                'description' => [NULL],
                'product_id' => '1',
                'thumbnail' => 'https://scontent.fhan5-3.fna.fbcdn.net/v/t1.0-9/70264145_733173737153011_5592570198516301824_o.jpg?_nc_cat=111&_nc_sid=e3f864&_nc_ohc=HMwuqTn4rKgAX8o1YUS&_nc_ht=scontent.fhan5-3.fna&oh=0a069a155a44a24aac9137a3e02127f1&oe=5F3AB89D',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'COFASON',
                'description' => [NULL],
                'product_id' => '2',
                'thumbnail' => 'https://scontent.fhan5-3.fna.fbcdn.net/v/t1.0-9/70264145_733173737153011_5592570198516301824_o.jpg?_nc_cat=111&_nc_sid=e3f864&_nc_ohc=HMwuqTn4rKgAX8o1YUS&_nc_ht=scontent.fhan5-3.fna&oh=0a069a155a44a24aac9137a3e02127f1&oe=5F3AB89D',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
