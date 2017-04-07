<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
use App\Http\Controllers\HomeController;
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Kendaraan::class, function (Faker\Generator $faker) {
  $data = new HomeController();
  $noPlat = $data->noPlat();
  $tipe = 'MOTOR';
  $gedung = $data->gedung($tipe);

    return [
        'noPlat'  => strtoupper($noPlat),
        'tipeKendaraan' => $tipe,
        'gedung'  => $gedung,
        'kondisi' => 0,
        'pencatatMasuk' => 'admin_root',
        'pencatatKeluar' => ''
    ];
});

$factory->define(App\KendaraanMobil::class, function (Faker\Generator $faker) {
  $data = new HomeController();
  $noPlat = $data->noPlat();
  $tipe = 'MOBIL';
  $gedung = $data->gedung($tipe);

    return [
        'noPlat'  => strtoupper($noPlat),
        'tipeKendaraan' => $tipe,
        'gedung'  => $gedung,
        'kondisi' => 0,
        'pencatatMasuk' => 'admin_root',
        'pencatatKeluar' => ''
    ];
});
