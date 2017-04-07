<?php

use Illuminate\Database\Seeder;

class MobilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\KendaraanMobil::class, 75)->create();
    }
}
