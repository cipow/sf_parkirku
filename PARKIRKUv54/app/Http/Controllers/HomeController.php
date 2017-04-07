<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function noPlat(){
    $seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $kode = $seed[array_rand($seed)];
    $daerah = '';
    foreach (array_rand($seed, 2) as $k){
      $daerah .= $seed[$k];
    }

    $seedNumber = str_split('123456789');
    $number = '';
    foreach (array_rand($seedNumber, 4) as $k) {
      $number .= $seedNumber[$k];
    }

    $noPlat = $kode.$number.$daerah;
    return $noPlat;

  }


  public function gedung($tipe){
    $gedungMotor = ['G','C','E','D','H','LB'];
    $gedungMobil = ['G','C','E'];
    if ($tipe == 'MOTOR') {
      $getIndex = array_rand($gedungMotor);
    } else {
      $getIndex = array_rand($gedungMobil);
    }
    return $gedungMotor[$getIndex];
  }
}
