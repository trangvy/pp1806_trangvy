<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
           ['category_id' => 1,
           'product_na' => 'laptop',
           'price' => 100,
           'image' => 'this is image',
           'quantity' => 23,
           'avg_rating' => 2.3],

           ['category_id' => 2,
           'product_na' => 'key board',
           'price' => 200,
           'image' => 'this is image',
           'quantity' => 10,
           'avg_rating' => 4.5],

       		['category_id' => 3,
           'product_na' => 'mouse',
           'price' => 430,
           'image' => 'this is image',
           'quantity' => 12,
           'avg_rating' => 5.0,],

       		['category_id' => 2,
           'product_na' => 'desktop',
           'price' => 120,
           'image' => 'this is image',
           'quantity' => 34,
           'avg_rating' => 4.5,]
       ]);
    }
}
