<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Infinix Note 11i',
           'description' => 'Infinix Note 11i specification, features, price, and many more things available here. Click to see the latest phone update.',
           'photo' => 'infinix.jpg',
           'price' => 420.44
        ]);
        DB::table('products')->insert([
            'name' => 'Sony Xperia 10 III',
            'description' => 'Sony Xperia 10 III specification, features, price, and many more things available here. Click to see the latest phone update.',
            'photo' => 'sony.jpg',
            'price' => 499.99
        ]);
        DB::table('products')->insert([
            'name' => 'OnePlus Nord 2 5G',
            'description' => 'OnePlus Nord 2 5G specification, features, price, and many more things available here. Click to see the latest phone update.',
            'photo' => 'oneplus.jpg',
            'price' => 441.26
        ]);
        DB::table('products')->insert([
            'name' => 'Nokia X100',
            'description' => 'Nokia X100 specification, features, price, and many more things available here. Click to see the latest phone update.',
            'photo' => 'nokia.jpg',
            'price' => 159.99
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Redmi Note 11 Pro 5G',
            'description' => 'Xiaomi Redmi Note 11 Pro 5G specification, features, price, and many more things available here. Click to see the latest phone update.',
            'photo' => 'xiaomi.jpg',
            'price' => 290.00
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone 13',
            'description' => 'Apple iPhone 13 specification, features, price, and many more things available here. Click to see the latest phone update.',
            'photo' => 'apple.jpg',
            'price' => 129.99
        ]);
    }
}
