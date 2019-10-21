<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['name' => 'Áo Thun'],
            ['name' => 'Áo Sơ Mi'],
            ['name' => 'Áo Khoắc'],
            ['name' => 'Áo Ba Lỗ'],
            ['name' => 'Quần Jeans'],
            ['name' => 'Quần Đùi'],
            ['name' => 'Váy'],
            ['name' => 'Đầm'],
            ['name' => 'Túi Xách'],
            ['name' => 'Mắt kính'],
            ['name' => 'Giầy/Dép'],
            ['name' => 'Mũ/Nón']
        ]);
    }
}
