<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->truncate();
        DB::table('order_product')->insert([
           ['order_id' => 1,
           'product_id' => 1,
           'quantity' => 2,
           'price' => 200],

           ['order_id' => 1,
           'product_id' => 2,
           'quantity' => 10,
           'price' => 200],

       		['order_id' => 1,
           'product_id' => 3,
           'quantity' => 3,
           'price' => 430],

       		['order_id' => 2,
           'product_id' => 1,
           'quantity' => 1,
           'price' => 120],

           ['order_id' => 2,
           'product_id' => 2,
           'quantity' => 1,
           'price' => 120],

           ['order_id' => 3,
           'product_id' => 4,
           'quantity' => 1,
           'price' => 120],
       ]);
    }
}
