<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('banners')->insert([
            ['name' => 'banner-1.jpg'],
            ['name' => 'banner-2.jpg'],
            ['name' => 'banner-3.jpg'],
            ['name' => 'banner-slidebar.jpg']
        ]);
    }
}
