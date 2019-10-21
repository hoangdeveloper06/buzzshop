<?php

use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('slides')->insert([
            ['name' => 'slide-1.jpg'],
            ['name' => 'slide-2.jpg'],
            ['name' => 'banner-1.jpg'],
            ['name' => 'banner-2.jpg'],
            ['name' => 'banner-3.jpg'],
            ['name' => 'banner-slidebar.jpg']
        ]);
    }
}
