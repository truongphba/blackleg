<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class QASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('q_a_s')->truncate();
        DB::table('q_a_s')->insert([
            [
                'id' => 1,
                'quest' => 'Will all of my informations be secured?',
                'answer' => 'All of our client informations will always be secured. For more information, please check out our client privacy policy.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 2,
                'quest' => 'Can the shipping address and the card payment address be different?',
                'answer' => 'Yes, you pay and order in 2 different addresses.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 3,
                'quest' => 'How do I change my delivery address?',
                'answer' => 'In oder to change your delivery address in the payment process and delivery, please contact to our customer service to change your delivery address.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 4,
                'quest' => 'How to cancel my orders? ',
                'answer' => 'In order to cancel your orders, please call directory or email to our customer service  in 24 hours after ordering.  All you have to do is give us your order informations so that we cancel your order.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 5,
                'quest' => 'Can I cancel a part of my order?',
                'answer' => 'Yes, but in some case and some particular product in your oders might not be able to cancel partially',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 6,
                'quest' => 'Do I have to pay fee if I cancel my order?',
                'answer' => 'Yes, if you cancel your order in 24 hours after ordering, you will only have to pay  a small fee depends on the product you have ordered',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 7,
                'quest' => 'Can I change my orders?',
                'answer' => 'In order to change your orders, please cancel your current order, and then order another product',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 8,
                'quest' => 'What if I receive a damaged product? ',
                'answer' => 'In case you receive a damaged product from your order, first we would like to apologise the unfortunate inconvenience you had, then we will send you a new order just like the one you placed as soon as possible.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 9,
                'quest' => 'Is overseas delivery available ?',
                'answer' => 'Unfortunately we are currently only able to delivery in Vietnam, but we will soon expand our delivery location abroad',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
