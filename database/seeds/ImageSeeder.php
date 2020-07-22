<?php

use Illuminate\Database\Seeder;

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
                'url_1' => 'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/pB65Wcry3zGeeFe91CoM3LhQwwKEtfWtMBkK0oaT.jpeg',
                'url_2' =>'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/WidMdnpwAx4PvWBRLnKmUiEOZcPG2WFQxXKFLy0A.jpeg',
                'url_3' =>'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/Jmd7IT2u6oNRQtW8P9i0xvUpIji2kmg1ayB6ZWSL.jpeg',
                'url_4' =>'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/cD1FWR2AIGgjhHIHUwwUjk1WLGHBYFwAfAWOtrhL.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'url_1' => 'https://ferosh.vn/storage/images/e26af35311d1e3eb0873d862e83aa1d4/420x630/UxUyLVYQ6tz8Fm1kjirIzjuwSb94mVs8sWPa2hAr.jpeg',
                'url_2' =>'https://ferosh.vn/storage/images/e26af35311d1e3eb0873d862e83aa1d4/420x630/N4tU5uorFWZryMphb0yR8X0Jz9nTNhbedZFPmGES.jpeg',
                'url_3' =>'https://ferosh.vn/storage/images/e26af35311d1e3eb0873d862e83aa1d4/420x630/SG84H2TsQ18fHccGMFRSYVogtrpsIpwgJeP062Lr.jpeg',
                'url_4' =>'https://ferosh.vn/storage/images/e26af35311d1e3eb0873d862e83aa1d4/420x630/keJV3M2pZudxe8Ggzmkhichn7JTAkf72yUpaNfSm.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'product_id' => 3,
                'url_1' => 'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/pR6DDDFSpl2QCILHzVzwDiq6N0ktvPIQ06I6Oern.jpeg',
                'url_2' =>'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/7uzIwAHGeTG48lQCctUbAMZAvvJXvoguRfRfIxsG.jpeg',
                'url_3' =>'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/HxhyG4Fh5PV6RMoV0Q7ik8GXqTcOAKSsYkkjAWQi.jpeg',
                'url_4' =>[NULL],
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'product_id' => 4,
                'url_1' => 'https://ferosh.vn/storage/images/66a7bb0bfc7f4f952d518528c1c7e024/420x630/zwdag2m5k13NirHPQRS3ihKRY07VvsOPZ3yKhPYz.jpeg',
                'url_2' =>'https://ferosh.vn/storage/images/66a7bb0bfc7f4f952d518528c1c7e024/420x630/dLJewKzDehyauN0mrYqKU9vIczUmK7FpbKNm06s0.jpeg',
                'url_3' =>'https://ferosh.vn/storage/images/66a7bb0bfc7f4f952d518528c1c7e024/420x630/JejyYAhyc9uOkTExBlRHXkLI23f4ZTP2KNyoJJ5J.jpeg',
                'url_4' =>[NULL],
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'product_id' => 5,
                'url_1' => 'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/DbPEVnJpRDKw09OC6PAAGa4q6buFoZjR5wTNQdrq.jpeg',
                'url_2' =>'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/Ue3EsAjtA9tTDC5HQOY9wWT3oskKS1jcFxmLI0wE.jpeg',
                'url_3' =>'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/CehQWHwpPcjm7XM0xPuLWbzMlpypJbFyiKeFaQRk.jpeg',
                'url_4' =>'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/o4KIMCTg4dbqdfVa5idfve9ciCsisoNk9GJtCOs1.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'product_id' => 6,
                'url_1' => 'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/35PGrsCIbpWDEhmfn03LF5Pa4gjrFOD349J774Tp.jpeg',
                'url_2' =>'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/YmNtUSClCTrBo58AUJX0336VRPE3N6aocj8M8V4u.jpeg',
                'url_3' =>'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/zezvSqWsVxA7k1gYEHcKrBqKVKNL52qIO2thHhJC.jpeg',
                'url_4' =>'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/qC5WDYMylJkZifpcnwiY66GadEFuy99zwUNdHaie.jpeg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'product_id' => 7,
                'url_1' => 'https://ferosh.vn/uploads/13-09-2019/420x630/DRE1062-5.jpg',
                'url_2' =>'https://ferosh.vn/uploads/13-09-2019/420x630/DRE1062-7.jpg',
                'url_3' =>[NULL],
                'url_4' =>[NULL],
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'product_id' => 8,
                'url_1' => 'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-5.jpg',
                'url_2' =>'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-4.jpg',
                'url_3' =>'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-1.jpg',
                'url_4' =>'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-7.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'product_id' => 9,
                'url_1' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1981.jpg',
                'url_2' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1966.jpg',
                'url_3' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1987.jpg',
                'url_4' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2008.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'product_id' => 10,
                'url_1' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2126.jpg',
                'url_2' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2154.jpg',
                'url_3' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2161.jpg',
                'url_4' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2171.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'product_id' => 11,
                'url_1' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1761.jpg',
                'url_2' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1769.jpg',
                'url_3' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1742.jpg',
                'url_4' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1746.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'product_id' => 12,
                'url_1' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1368.jpg',
                'url_2' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1404.jpg',
                'url_3' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1344.jpg',
                'url_4' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1416.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'product_id' => 13,
                'url_1' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2014.jpg',
                'url_2' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2020.jpg',
                'url_3' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2052.jpg',
                'url_4' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2058.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'product_id' => 14,
                'url_1' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2204.jpg',
                'url_2' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2261.jpg',
                'url_3' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2267.jpg',
                'url_4' =>'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2286.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'product_id' => 15,
                'url_1' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8389.jpg',
                'url_2' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8397.jpg',
                'url_3' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8398.jpg',
                'url_4' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8402.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'product_id' => 16,
                'url_1' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8308(1).jpg',
                'url_2' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8316(1)(2).jpg',
                'url_3' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8317(1)(2).jpg',
                'url_4' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8321(1).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'product_id' => 17,
                'url_1' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8303(1).jpg',
                'url_2' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8291(1)(2).jpg',
                'url_3' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8296(1)(2).jpg',
                'url_4' =>'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8302(1).jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'product_id' => 18,
                'url_1' => 'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8351.jpg',
                'url_2' =>'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8382.jpg',
                'url_3' =>'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8402.jpg',
                'url_4' =>[NULL],
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
