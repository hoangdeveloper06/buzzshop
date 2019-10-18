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
            ['category_name' => 'Nguyễn Văn A'],
            ['category_name' => 'Nguyễn Văn B'],
            ['category_name' => 'Nguyễn Văn C'],
            ['category_name' => 'Nguyễn Văn D'],
        ]);
    }
}
