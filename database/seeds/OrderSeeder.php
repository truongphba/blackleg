<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id' => 1,
                'created_by' => 'Trịnh Thu',
                'ship_date' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'ship_address' => 'Trần Cung, Hà Nội',
                'ship_phone' => '0936696825',
                'total_price' => 1725000,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'created_by' => 'Nguyễn Long',
                'ship_date' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'ship_address' => 'Tôn Thất Thuyết, Hà Nội',
                'ship_phone' => '0936154872',
                'total_price' => 1960000,
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'created_by' => 'Nguyễn Hồng',
                'ship_date' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'ship_address' => 'Cầu Giấy, Hà Nội',
                'ship_phone' => '0936154456',
                'total_price' => 2235000,
                'created_at' => Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'created_by' => 'Bùi Thị Xuân',
                'ship_date' => Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'ship_address' => 'Hạ Long, Quảng Ninh',
                'ship_phone' => '0936145456',
                'total_price' => 1255000,
                'created_at' => Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-4)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'created_by' => 'Nguyễn Lanh',
                'ship_date' => Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'ship_address' => 'KDT Times city, Hà Nội',
                'ship_phone' => '0916545456',
                'total_price' => 2612000,
                'created_at' => Carbon::now()->addDays(-6)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-5)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'created_by' => 'Bùi Viện',
                'ship_date' => Carbon::now()->addDays(-6)->format('Y-m-d H:i:s'),
                'ship_address' => 'Trần Duy Hưng, Hà Nội',
                'ship_phone' => '0916578456',
                'total_price' => 3784000,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-6)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'created_by' => 'Đặng Tiểu Cường',
                'ship_date' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'ship_address' => 'Xuân Mai, Hà Nội',
                'ship_phone' => '0916578466',
                'total_price' => 5392000,
                'created_at' => Carbon::now()->addDays(-8)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'created_by' => 'Nguyễn Thu Hằng',
                'ship_date' => Carbon::now()->addDays(-9)->format('Y-m-d H:i:s'),
                'ship_address' => 'Trần Cung, Hà Nội',
                'ship_phone' => '0916578433',
                'total_price' => 6287000,
                'created_at' => Carbon::now()->addDays(-10)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-9)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'created_by' => 'Phạm Vân',
                'ship_date' => Carbon::now()->addDays(-10)->format('Y-m-d H:i:s'),
                'ship_address' => 'Cù Chính Lan, Hà Nội',
                'ship_phone' => '0916548433',
                'total_price' => 4047000,
                'created_at' => Carbon::now()->addDays(-11)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-10)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'created_by' => 'Nguyễn Kim Chung',
                'ship_date' => Carbon::now()->addDays(-11)->format('Y-m-d H:i:s'),
                'ship_address' => 'Tam Trinh, Hà Nội',
                'ship_phone' => '0916548444',
                'total_price' => 8055000,
                'created_at' => Carbon::now()->addDays(-12)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-11)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
