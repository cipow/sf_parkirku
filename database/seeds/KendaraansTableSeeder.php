<?php

use Illuminate\Database\Seeder;

class KendaraansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Kendaraan::class, 600)->create();
    }
}
