<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name' => 'Áo Thun In Dáng Người'],
            ['category_id' => '1'],
            ['description' => ''],
            ['unit_price' => '790000'],
            ['promotion_price' => '20'],
            ['status' => '1'],
            ['new' => '1'],
            ['hot' => '1'],

            ['name' => 'Áo Thun Dài Tay'],
            ['category_id' => '1'],
            ['description' => ''],
            ['unit_price' => '790000'],
            ['promotion_price' => '20'],
            ['status' => '1'],
            ['new' => '1'],
            ['hot' => '1'],
            
        ]);
    }
}
