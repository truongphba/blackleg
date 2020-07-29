<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Áo Sơ Mi',
                'thumbnail' => 'https://ferosh.vn/uploads/14-08-2019/420x630/V61B19H049-RSS51--M64T19Q010-P4115--2-.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Đầm',
                'thumbnail' => 'https://ferosh.vn/uploads/07-09-2019/V63R19Q001-R1P24--2-(1).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Váy',
                'thumbnail' => 'https://ferosh.vn/uploads/05-09-2019/L63F19Q026-F1814--1-.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Jumpsuit',
                'thumbnail' => 'https://ferosh.vn/storage/images/7532e11ff40e244cedde99f723f5e882/525x787/duV5oye5kGOP51g6ixnrgoHCDfMPQKDb5gaPPikY.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'Chân váy',
                'thumbnail' => 'https://ferosh.vn/uploads/02-11-2017/De%20Leah-Chan-vay-mini-can-beo-gau-xanh-tim-007.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'Đồ ngủ',
                'thumbnail' => 'https://ferosh.vn/storage/images/c090dfe166fa2d6830fe7eec1bd06b73/525x787/TaFPosCQ0VJlCwgI4AsDTASRoXtrHYzn6NZLNyyt.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
