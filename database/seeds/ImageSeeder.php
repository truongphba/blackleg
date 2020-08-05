<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('images')->truncate();
        DB::table('images')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'url' => 'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/pB65Wcry3zGeeFe91CoM3LhQwwKEtfWtMBkK0oaT.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'url' =>'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/WidMdnpwAx4PvWBRLnKmUiEOZcPG2WFQxXKFLy0A.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'url' =>'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/Jmd7IT2u6oNRQtW8P9i0xvUpIji2kmg1ayB6ZWSL.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'product_id' => 1,
                'url' =>'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/cD1FWR2AIGgjhHIHUwwUjk1WLGHBYFwAfAWOtrhL.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'product_id' => 2,
                'url' => 'https://ferosh.vn/storage/images/0c28423a88b5dbffd0d1ee2aec41efd0/420x630/RrPhuNQc1LiOz64MVF9cZVOlFGMHBaUXMJThvI1l.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'product_id' => 2,
                'url' =>'https://ferosh.vn/storage/images/0c28423a88b5dbffd0d1ee2aec41efd0/420x630/Z8D4Nd3D9OaNX9BiA5arjHk5k7Sgq78PHlHdMYyj.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'product_id' => 2,
                'url' =>'https://ferosh.vn/storage/images/0c28423a88b5dbffd0d1ee2aec41efd0/420x630/mr9KGqAAAls7mAH7AzA80roLxASnuGKrWpDtyUAl.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'product_id' => 3,
                'url' =>'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/HxhyG4Fh5PV6RMoV0Q7ik8GXqTcOAKSsYkkjAWQi.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'product_id' => 3,
                'url' => 'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/pR6DDDFSpl2QCILHzVzwDiq6N0ktvPIQ06I6Oern.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'product_id' => 3,
                'url' =>'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/7uzIwAHGeTG48lQCctUbAMZAvvJXvoguRfRfIxsG.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'product_id' => 4,
                'url' =>'https://ferosh.vn/storage/images/66a7bb0bfc7f4f952d518528c1c7e024/420x630/JejyYAhyc9uOkTExBlRHXkLI23f4ZTP2KNyoJJ5J.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'product_id' => 5,
                'url' => 'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/DbPEVnJpRDKw09OC6PAAGa4q6buFoZjR5wTNQdrq.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'product_id' => 5,
                'url' =>'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/Ue3EsAjtA9tTDC5HQOY9wWT3oskKS1jcFxmLI0wE.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'product_id' => 5,
                'url' =>'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/CehQWHwpPcjm7XM0xPuLWbzMlpypJbFyiKeFaQRk.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'product_id' => 5,
                'url' =>'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/o4KIMCTg4dbqdfVa5idfve9ciCsisoNk9GJtCOs1.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'product_id' => 6,
                'url' =>'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/qC5WDYMylJkZifpcnwiY66GadEFuy99zwUNdHaie.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'product_id' => 6,
                'url' => 'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/35PGrsCIbpWDEhmfn03LF5Pa4gjrFOD349J774Tp.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'product_id' => 6,
                'url' =>'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/YmNtUSClCTrBo58AUJX0336VRPE3N6aocj8M8V4u.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'product_id' => 6,
                'url' =>'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/zezvSqWsVxA7k1gYEHcKrBqKVKNL52qIO2thHhJC.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'product_id' => 7,
                'url' => 'https://ferosh.vn/uploads/02-10-2019/420x630/VL1902082Tr-1.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'product_id' => 7,
                'url' =>'https://ferosh.vn/uploads/02-10-2019/420x630/VL1902082Tr-5.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'product_id' => 8,
                'url' =>'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-4.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'product_id' => 8,
                'url' => 'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-5.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'product_id' => 8,
                'url' =>'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-1.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'product_id' => 8,
                'url' =>'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-7.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'product_id' => 9,
                'url' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1981.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'product_id' => 9,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1966.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'product_id' => 9,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1987.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'product_id' => 9,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2008.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'product_id' => 10,
                'url' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2126.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'product_id' => 10,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2154.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'product_id' => 10,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2161.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'product_id' => 10,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2171.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'product_id' => 11,
                'url' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1761.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'product_id' => 11,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1769.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'product_id' => 11,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1742.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'product_id' => 11,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1746.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'product_id' => 12,
                'url' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1368.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'product_id' => 12,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1404.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 41,
                'product_id' => 12,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1344.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 42,
                'product_id' => 12,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1416.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 43,
                'product_id' => 13,
                'url' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2014.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 44,
                'product_id' => 13,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2020.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 45,
                'product_id' => 13,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2052.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 46,
                'product_id' => 13,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2058.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 47,
                'product_id' => 14,
                'url' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2204.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 48,
                'product_id' => 14,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2261.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 49,
                'product_id' => 14,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2267.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 50,
                'product_id' => 14,
                'url' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2286.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 51,
                'product_id' => 15,
                'url' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8389.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 52,
                'product_id' => 15,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8397.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 53,
                'product_id' => 15,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8398.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 54,
                'product_id' => 15,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8402.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 55,
                'product_id' => 16,
                'url' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8308(1).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 56,
                'product_id' => 16,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8316(1)(2).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 57,
                'product_id' => 16,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8317(1)(2).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'product_id' => 16,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8321(1).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 59,
                'product_id' => 17,
                'url' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8303(1).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 60,
                'product_id' => 17,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8291(1)(2).jpg', 'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'product_id' => 17,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8296(1)(2).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 62,
                'product_id' => 17,
                'url' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8302(1).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 63,
                'product_id' => 18,
                'url' => 'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8351.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 64,
                'product_id' => 18,
                'url' =>'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8382.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 65,
                'product_id' => 18,
                'url' =>'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8402.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 66,
                'product_id' => 19,
                'url' =>'https://ferosh.vn/storage/images/d94500cbf74c4ea234acc780c04913a2/420x630/P7clnBppXmthRsLt8OeB4OUAWtGOFzFFRWxgTAlM.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 67,
                'product_id' => 19,
                'url' =>'https://ferosh.vn/storage/images/d94500cbf74c4ea234acc780c04913a2/420x630/tGY8gTTS2Dh5EEbp2768IBenWhPVc1KgyneVxODN.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 68,
                'product_id' => 20,
                'url' =>'https://ferosh.vn/storage/images/2188a2fe8f909b85070d055dfe363142/420x630/BZZxgrbycyr6gxWepaMS9aKzeoFiZJ06Qz7CLWKm.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 69,
                'product_id' => 20,
                'url' =>'https://ferosh.vn/storage/images/2188a2fe8f909b85070d055dfe363142/420x630/apNLh1OkqaNaTHqtOnTdJw5mRPvDSYqB1NWEt8gF.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 70,
                'product_id' => 21,
                'url' =>'https://ferosh.vn/storage/images/8646de4bf4a5dc60490bf6479ada9250/420x630/dnraNV5iLBwtEnaK4DBxzcMGfOwfbjTMydQYLhew.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 71,
                'product_id' => 21,
                'url' =>'https://ferosh.vn/storage/images/8646de4bf4a5dc60490bf6479ada9250/420x630/C8GzJ6BJh22jnzfTxYvSJ400fJIHWAkT1oLUX6zw.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 72,
                'product_id' => 22,
                'url' =>'https://ferosh.vn/storage/images/2ef1bbdc45ad8e0abaa18d187033bca2/420x630/2IIUhYDGEqUDYY0wtOWD4HqonuD4jX4iIbvQRyUS.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 73,
                'product_id' => 22,
                'url' =>'https://ferosh.vn/storage/images/2ef1bbdc45ad8e0abaa18d187033bca2/420x630/CjneRHpR0Rf7HDp95fDV05xB57BbT7krw2dHs5Ub.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 74,
                'product_id' => 23,
                'url' =>'https://ferosh.vn/storage/images/f133b30511fd4fcb683d685de5514bc7/420x630/Zhk6culE0SsdkuHsRg8GDpug1gm92Nccbyj57Dyo.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 75,
                'product_id' => 23,
                'url' =>'https://ferosh.vn/storage/images/f133b30511fd4fcb683d685de5514bc7/420x630/70uGXzF1ITd9PRnNrywjzCSxknqd9e0ALYf2CHVC.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 76,
                'product_id' => 24,
                'url' =>'https://ferosh.vn/storage/images/8fc2ff25a36a84a76e695d7a30819c21/420x630/ciiJUcLfzCHaoDKmI7cRbKTvS6sBAK0IpWvhmosZ.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 77,
                'product_id' => 24,
                'url' =>'https://ferosh.vn/storage/images/8fc2ff25a36a84a76e695d7a30819c21/420x630/igsPT7sR7pwGKlXIqHXWX9ypFa7qYOztHpEmCIRT.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 78,
                'product_id' => 25,
                'url' =>'https://ferosh.vn/storage/images/96f10132748c7049e3bbf5ca0b275f18/420x630/YmKsB5dNUwUt77E1ydq2NEIkJLOxKYP9A0QvGC2g.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 79,
                'product_id' => 25,
                'url' =>'https://ferosh.vn/storage/images/96f10132748c7049e3bbf5ca0b275f18/420x630/OY1q039BNdts1wLuphhWu1MCTnvakBhsHrLYlJpo.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 80,
                'product_id' => 26,
                'url' =>'https://ferosh.vn/storage/images/5033fd9ca925f86dbd50b35dcdd85206/420x630/2KvNjB2gAEaVCaNkJSJI3cj2KqxxgsL9CO2c1Lad.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 81,
                'product_id' => 26,
                'url' =>'https://ferosh.vn/storage/images/5033fd9ca925f86dbd50b35dcdd85206/420x630/VwbT7Zx1fI8QjhXAjNqxGsl0lxJ1kDCRRqw7svAa.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 82,
                'product_id' => 26,
                'url' =>'https://ferosh.vn/storage/images/5033fd9ca925f86dbd50b35dcdd85206/420x630/fv4PKC24PfOKIxTOJbB8PyrOwKNfQZxsnAc5Q61O.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 83,
                'product_id' => 26,
                'url' =>'https://ferosh.vn/storage/images/5033fd9ca925f86dbd50b35dcdd85206/420x630/mqdc2daIbvaDj0LPvU551r1WI2txnCCjNxdq4RHE.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 84,
                'product_id' => 26,
                'url' =>'https://ferosh.vn/storage/images/5033fd9ca925f86dbd50b35dcdd85206/420x630/q9ggzoBMMzAg2mWohnO8fhNP23SedCVw9D2E6RUT.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 85,
                'product_id' => 27,
                'url' =>'https://ferosh.vn/storage/images/80b34c84a6e5ed25df112c11de676adc/420x630/p28B4fMZr1iRa55m913DVkW58bGzCCbdbBb6KEK1.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 86,
                'product_id' => 27,
                'url' =>'https://ferosh.vn/storage/images/80b34c84a6e5ed25df112c11de676adc/420x630/DsZ6QXsaWdMBJnMs3zsO7cypoJwwTNMMLFLmYsag.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 87,
                'product_id' => 27,
                'url' =>'https://ferosh.vn/storage/images/80b34c84a6e5ed25df112c11de676adc/420x630/tGOZe1zgZu5yYJqTYGtc5MRBm8t0pWiD9RxlCm44.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 88,
                'product_id' => 27,
                'url' =>'https://ferosh.vn/storage/images/80b34c84a6e5ed25df112c11de676adc/420x630/PZk2Q771c5C2uK2gOg4cSQ4Yn6dG8rYquxREZyzh.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 89,
                'product_id' => 28,
                'url' =>'https://ferosh.vn/storage/images/5e26badb3867ac7f26d3624ca39a9df4/420x630/RTAK5G9QFUHcfbDaoYsVvbiTFc0CSuPVs5zU9ECd.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 90,
                'product_id' => 28,
                'url' =>'https://ferosh.vn/storage/images/5e26badb3867ac7f26d3624ca39a9df4/420x630/lmo4xtESpntsc7M1hDTdm29yPMA4CoxjAAbmyMWT.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 91,
                'product_id' => 28,
                'url' =>'https://ferosh.vn/storage/images/5e26badb3867ac7f26d3624ca39a9df4/420x630/qMXL3G9lqVsFxIlGYdJlnAk9w8gTnc79vsAoneTr.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 92,
                'product_id' => 29,
                'url' =>'https://ferosh.vn/storage/images/a463cac2327534f6f02563ffbdf92918/420x630/vPFV6bPPT9DRGYkIc4x4IKotZpub2hgZyhYwf18U.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 93,
                'product_id' => 29,
                'url' =>'https://ferosh.vn/storage/images/a463cac2327534f6f02563ffbdf92918/420x630/y2Bp89xyltbmSIB6yTnsdB9khjiY3y7jF9QTs4Fk.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 94,
                'product_id' => 29,
                'url' =>'https://ferosh.vn/storage/images/a463cac2327534f6f02563ffbdf92918/420x630/xiffMrNor4xgx3CV2qrQq28V9WmZJKqBOP5gCTVq.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 95,
                'product_id' => 30,
                'url' =>'https://ferosh.vn/storage/images/7532e11ff40e244cedde99f723f5e882/420x630/1D0PwVKrzQlQmnsddXxwOkOttZQrD1Rr0JlSKQAq.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 96,
                'product_id' => 30,
                'url' =>'https://ferosh.vn/storage/images/7532e11ff40e244cedde99f723f5e882/420x630/duV5oye5kGOP51g6ixnrgoHCDfMPQKDb5gaPPikY.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 97,
                'product_id' => 30,
                'url' =>'https://ferosh.vn/storage/images/7532e11ff40e244cedde99f723f5e882/420x630/HwpDa7pWlkC4Y2CY2vKMqRBug7Ofp9DXroF9kd9p.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 98,
                'product_id' => 30,
                'url' =>'https://ferosh.vn/storage/images/7532e11ff40e244cedde99f723f5e882/420x630/ScpZ5kMoWJff0uP6SQK25ynppRfGxWN6m4w6YN2L.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 99,
                'product_id' => 31,
                'url' =>'https://ferosh.vn/storage/images/f7b80214c9564ac1bd11fd91a037d17b/420x630/dkPnBxuksQncpDrmuwug8s1zHw8XB9Dbv4KNUUGE.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 100,
                'product_id' => 31,
                'url' =>'https://ferosh.vn/storage/images/f7b80214c9564ac1bd11fd91a037d17b/420x630/cVtiXiqhGE5qV3jzOeKANhPzyVHrO0ppx9Kl13yn.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 101,
                'product_id' => 31,
                'url' =>'https://ferosh.vn/storage/images/f7b80214c9564ac1bd11fd91a037d17b/420x630/U8aaFStUXxts7njGrft05xJiWb0vAbGvDNg86c2W.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 102,
                'product_id' => 31,
                'url' =>'https://ferosh.vn/storage/images/f7b80214c9564ac1bd11fd91a037d17b/420x630/1W977kfwtjkAXwgwKQzRrE2g7tQd3JbWkPtgAuti.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 103,
                'product_id' => 32,
                'url' =>'https://ferosh.vn/storage/images/7f65d29fa86be6c6036fd73bae7e3cd3/420x630/ne42CgceEMHkypxYDPYx9b5thIFZ5iK463CMMsME.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 104,
                'product_id' => 32,
                'url' =>'https://ferosh.vn/storage/images/7f65d29fa86be6c6036fd73bae7e3cd3/420x630/FL2c4TjOMKlorlwdn1F40TiSzzNrR4mJ9BDj4NKY.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 105,
                'product_id' => 32,
                'url' =>'https://ferosh.vn/storage/images/7f65d29fa86be6c6036fd73bae7e3cd3/420x630/bz5WP1UjC733ERrT7cPtidKuj5dnI5LJ7ju3LnLx.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 106,
                'product_id' => 32,
                'url' =>'https://ferosh.vn/storage/images/7f65d29fa86be6c6036fd73bae7e3cd3/420x630/aoxF5rDjzEdS2cegK4q7Nn3jBAg3blK4NwdK93aH.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 107,
                'product_id' => 32,
                'url' =>'https://ferosh.vn/storage/images/7f65d29fa86be6c6036fd73bae7e3cd3/420x630/YaffSZ5gIDj5EXqVMNuQ6ZDMxVQQdBiUF1pGuoOU.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 108,
                'product_id' => 33,
                'url' =>'https://ferosh.vn/storage/images/e575af3f6d64da1287b8b6552b65a1df/420x630/EihzfYUVG2mVYyaLt0SgLn23N3El0vjwjsc441sa.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 109,
                'product_id' => 33,
                'url' =>'https://ferosh.vn/storage/images/e575af3f6d64da1287b8b6552b65a1df/420x630/4GFMKs1wBuuLdz6ywHpYWAHV0ypko9eLBqcAmGHX.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 110,
                'product_id' => 33,
                'url' =>'https://ferosh.vn/storage/images/e575af3f6d64da1287b8b6552b65a1df/420x630/8Q8mUFxe5H2Cc97jSbP7HQA6EjlzIqlK7lDjiSNn.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 111,
                'product_id' => 34,
                'url' =>'https://ferosh.vn/storage/images/9dc0a5e5bfcf4d73878002040de152ae/420x630/lqqIp9kceUhAAL4XvM8AFWp0dODFEtnJSsvv3uw4.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 112,
                'product_id' => 34,
                'url' =>'https://ferosh.vn/storage/images/9dc0a5e5bfcf4d73878002040de152ae/420x630/NJV1wbItpYLqROybPBiwAAH2Ait6PcrGaLjEZQHS.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 113,
                'product_id' => 35,
                'url' =>'https://ferosh.vn/storage/images/67efce7bbed5fa3ea002e27e0387fa1e/420x630/aNigUJwuYtmfBnLVpzRz3gHRMYDp6r2YvTgDGmYb.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 114,
                'product_id' => 35,
                'url' =>'https://ferosh.vn/storage/images/67efce7bbed5fa3ea002e27e0387fa1e/420x630/X52jbAWOiNcyZg5skR2EcISNU189t5FTCc0jzc9s.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 115,
                'product_id' => 35,
                'url' =>'',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 116,
                'product_id' => 36,
                'url' =>'https://ferosh.vn/storage/images/67efce7bbed5fa3ea002e27e0387fa1e/420x630/MrSEB28YhCgz6M8QeQDRx7CI08Q76liRpdSv0AFr.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 117,
                'product_id' => 36,
                'url' =>'https://ferosh.vn/storage/images/247ad943f6dde95b3429e21616e96ae9/420x630/dtTRZo12TT1Oew2lpVIg79OleYfMSFCSdI1XyeJF.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 118,
                'product_id' => 37,
                'url' =>'https://ferosh.vn/storage/images/8c3429b990429dca8fbe1cd6cf2e9636/420x630/hSmF3P6bl9QOFAGDWTRpN4SwVtwO5kh27YPRXkRE.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 119,
                'product_id' => 37,
                'url' =>'https://ferosh.vn/storage/images/8c3429b990429dca8fbe1cd6cf2e9636/420x630/lq3QJF3Xz6xBcsHSptaOClytQ3PsknNiBuyxMbuV.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 120,
                'product_id' => 38,
                'url' =>'https://ferosh.vn/storage/images/3398f11e14b079df6c5b2e2541ea641e/420x630/JgRm49f67In5tme2DOUgwTfGvNdOCEiZQT3nY9l5.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 121,
                'product_id' => 38,
                'url' =>'https://ferosh.vn/storage/images/3398f11e14b079df6c5b2e2541ea641e/420x630/xE4mHhLPX4gd0wppiGOqXreBn6xNErSNdNtz0yr6.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 122,
                'product_id' => 39,
                'url' =>'https://ferosh.vn/storage/images/07a498d2be79102ce2ca947bae2c53eb/420x630/fJyPqUAyHMDxw5oZzPCGwdUdPxiKeANrv9BTvyCi.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 123,
                'product_id' => 39,
                'url' =>'https://ferosh.vn/storage/images/07a498d2be79102ce2ca947bae2c53eb/420x630/8aFFNEzxdDIHKfcRzGUHVJ53k4JwEjnYd0nBv7Rd.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 124,
                'product_id' => 40,
                'url' =>'https://ferosh.vn/storage/images/58111ca2842fcb35ecbfd51fd89eb79a/420x630/F06Xc0F3Q2qdKkfqphdupHUCaoimwoUAdM1eGJgb.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 125,
                'product_id' => 40,
                'url' =>'https://ferosh.vn/storage/images/58111ca2842fcb35ecbfd51fd89eb79a/420x630/ou1Z1YwdSgYFUXXMFLx7rWta4K8QnQjrtWO7stDZ.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
