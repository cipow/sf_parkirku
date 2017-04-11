<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kendaraan;
use App\Lapor;
use Carbon\Carbon;
use Validator;

class homePageParkirku extends Controller
{
  public function index(){
    $totalMotorG = $this->jumlahMotorGedungG();
    $totalMobilG = $this->jumlahMobilGedungG();
    $totalMotorH = $this->jumlahMotorGedungH();
    $totalMotorD = $this->jumlahMotorGedungD();
    $totalMotorE = $this->jumlahMotorGedungE();
    $totalMobilE = $this->jumlahMobilGedungE();
    $totalMotorC = $this->jumlahMotorGedungC();
    $totalMobilC = $this->jumlahMobilGedungC();
    $totalMotorLB= $this->jumlahLapanganBasket();

    $jumatan = $this->waktuJumatan();

    return view('homePage.konten.kuota',[
      'totalMotorG'  => $totalMotorG,
      'totalMobilG'  => $totalMobilG,
      'totalMotorH'  => $totalMotorH,
      'totalMotorD'  => $totalMotorD,
      'totalMotorE'  => $totalMotorE,
      'totalMobilE'  => $totalMobilE,
      'totalMotorC'  => $totalMotorC,
      'totalMobilC'  => $totalMobilC,
      'totalMotorLB' => $totalMotorLB,
      'waktu'        => $jumatan
    ]);
  }

  public function laporkan(Request $request){
    $validator = Validator::make($request->all(),[
      'nama'  => 'required|max:30',
      'noHP'  => 'required|digits_between:11,13',
      'judul' => 'required|min:15|max:50',
      'pesan' => 'required|min:30|max:255',
    ]);

    if($validator->fails()){
      return redirect('/#lapor')
            ->withInput()
            ->withErrors($validator);
    }

    $lapor = new Lapor();
    $lapor->namaPelapor = $request->nama;
    $lapor->noHP        = $request->noHP;
    $lapor->judulLapor  = $request->judul;
    $lapor->pesanLapor  = $request->pesan;
    $lapor->save();
    return redirect('/#lapor')->with('pesan','sukses');
  }

  public function daftarLapor(){
    $lapor = Lapor::orderBy('created_at', 'desc')
            ->where('publish', 1)
            ->get();
    return view('homePage.konten.daftarLapor', ['data' => $lapor, 'text' => 'on progress']);
  }

  public function daftarLaporSemua(){
    $lapor = Lapor::orderBy('created_at', 'desc')
            ->get();
    return view('homePage.konten.daftarLapor', ['data' => $lapor, 'text' => 'all progress']);
  }

  public function daftarLaporSelesai(){
    $lapor = Lapor::orderBy('created_at', 'desc')
            ->where('publish', 0)
            ->get();
    return view('homePage.konten.daftarLapor', ['data' => $lapor, 'text' => 'finished']);
  }

  public function waktuJumatan(){
    $date = Carbon::now();
    if ($date->format('l') == 'Friday') {
      if ($date->hour >= 8 && $date->hour <= 14 ) {
        return 1;
      } else {
        return 0;
      }
    } else {
      return 0;
    }
  }

  public function jumlahMotorGedungG(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','G')
            ->where('tipeKendaraan','MOTOR');
    $total= $data->count();
    return $total;
  }

  public function jumlahMobilGedungG(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','G')
            ->where('tipeKendaraan','MOBIL');
    $total= $data->count();
    return $total;
  }

  public function jumlahMotorGedungH(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','H')
            ->where('tipeKendaraan','MOTOR');
    $total= $data->count();
    return $total;
  }

  public function jumlahMotorGedungD(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','D')
            ->where('tipeKendaraan','MOTOR');
    $total= $data->count();
    return $total;
  }

  public function jumlahMotorGedungE(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','E')
            ->where('tipeKendaraan','MOTOR');
    $total= $data->count();
    return $total;
  }

  public function jumlahMobilGedungE(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','E')
            ->where('tipeKendaraan','MOBIL');
    $total= $data->count();
    return $total;
  }

  public function jumlahMotorGedungC(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','C')
            ->where('tipeKendaraan','MOTOR');
    $total= $data->count();
    return $total;
  }

  public function jumlahMobilGedungC(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','C')
            ->where('tipeKendaraan','MOBIL');
    $total= $data->count();
    return $total;
  }

  public function jumlahLapanganBasket(){
    $data = Kendaraan::where('kondisi',0)
            ->where('gedung','LB')
            ->where('tipeKendaraan','MOTOR');
    $total= $data->count();
    return $total;
  }
}
