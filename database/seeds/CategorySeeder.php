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
                'name' => 'Women Shirt',
                'thumbnail' => 'https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.0-9/109695604_975238502946532_8464704805258571631_o.jpg?_nc_cat=108&_nc_sid=e3f864&_nc_ohc=yjNI5U-jg2YAX8t_S1l&_nc_ht=scontent.fsgn2-3.fna&oh=bff7cd019d3aa7d89050ed104b6a63f0&oe=5F4B36C2',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Dress',
                'thumbnail' => 'https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.0-9/97998125_882219942259327_3914516795112816640_o.jpg?_nc_cat=110&_nc_sid=e3f864&_nc_ohc=ecpU7D9tV2oAX-QHqyW&_nc_ht=scontent.fsgn2-6.fna&oh=4fa5ef740632f9f10a47423cd111fc41&oe=5F4B04C2',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Jumpsuit',
                'thumbnail' => 'https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.0-9/100747056_1097171943972021_4634036126292639744_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=YoEwLJiQhbMAX8CfRX4&_nc_oc=AQnhQNiuLN9SIDbA8qgh5SFA38Zvbpzvoh-CRuPD3a_x6VpSpMyP6y4UknOtPfB0ioI&_nc_ht=scontent.fsgn2-1.fna&oh=e9e40131be5eeecbebba5de5e874580d&oe=5F4AF86F',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Skirt',
                'thumbnail' => 'https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2019/10/05082548/ch%C3%A2n-v%C3%A1y-d%C3%A0i-m%E1%BA%B7c-m%C3%B9a-%C4%91%C3%B4ng-2019.jpg',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Sleepwear',
                'thumbnail' => 'https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.0-9/116073538_3228720017173597_769423600697365999_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=WokY1wkbUS8AX_twfSw&_nc_ht=scontent.fsgn2-1.fna&oh=719cef66fc12ce682b156fab961cb178&oe=5F4976DF',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
