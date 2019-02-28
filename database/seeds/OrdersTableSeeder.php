<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
           ['user_id' => 1,
           'total_price' => 123,
           'description' => 'ahahaahahahahahahah'],

           ['user_id' => 2,
           'total_price' => 12333,
           'description' => 'this is description'],

       		['user_id' => 3,
           'total_price' => 12333,
           'description' => 'this is description'],

       		['user_id' => 2,
           'total_price' => 12333,
           'description' => 'this is description']
       ]);
    }
}
