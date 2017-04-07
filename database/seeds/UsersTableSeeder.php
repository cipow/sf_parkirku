<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Super User PARKIRKU',
          'username' => 'admin_root',
          'super' => 1,
          'password' => bcrypt('TerbukalahPARKIRKU'),
      ]);
    }
}
