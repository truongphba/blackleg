<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'thumbnail' => 'https://scontent.fhan5-3.fna.fbcdn.net/v/t1.0-9/70264145_733173737153011_5592570198516301824_o.jpg?_nc_cat=111&_nc_sid=e3f864&_nc_ohc=HMwuqTn4rKgAX8o1YUS&_nc_ht=scontent.fhan5-3.fna&oh=0a069a155a44a24aac9137a3e02127f1&oe=5F3AB89D',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'COFASON',
                'thumbnail' => 'https://scontent.fhan5-3.fna.fbcdn.net/v/t1.0-9/70264145_733173737153011_5592570198516301824_o.jpg?_nc_cat=111&_nc_sid=e3f864&_nc_ohc=HMwuqTn4rKgAX8o1YUS&_nc_ht=scontent.fhan5-3.fna&oh=0a069a155a44a24aac9137a3e02127f1&oe=5F3AB89D',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'SEVEN.AM',
                'thumbnail' => 'https://i.ytimg.com/vi/6pharRlD2uI/maxresdefault.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'ME\'S DIARY',
                'thumbnail' => 'https://scontent.fhan5-7.fna.fbcdn.net/v/t1.0-9/88158758_1034291020260114_1152949254390546432_o.jpg?_nc_cat=100&_nc_sid=730e14&_nc_ohc=2aOS_r8qwNEAX_esoRE&_nc_ht=scontent.fhan5-7.fna&oh=e9b08644a25cf59f4e85d2edea635d7d&oe=5F473BCF',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'EMMA',
                'thumbnail' => 'https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/116073538_3228720017173597_769423600697365999_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=xjeYahF2RtYAX_wPb25&_nc_ht=scontent.fhan5-6.fna&oh=46049c04db4ee8d568bca0636e889df0&oe=5F45825F',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
