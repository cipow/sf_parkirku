<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','homePageParkirku@index')->name('home');
Route::post('/','homePageParkirku@laporkan')->name('lapor');

Auth::routes();
Route::get('/admin','adminParkirku@index')->name('adminPanel');
Route::post('/admin','adminParkirku@tambahKendaraan')->name('adminKendaraanTambah');
Route::post('/admin/keluar/{id}','adminParkirku@keluar')->name('adminKendaraanKeluar');
Route::post('/admin/edit/{id}','adminParkirku@viewEditKendaraan')->name('tampilanEdit');
Route::put('/admin/edit/{id}','adminParkirku@editKendaraan')->name('edit');
Route::get('/admin/daftar/parkir','adminParkirku@daftarKendaraan')->name('adminListParkir');
Route::get('/admin/daftar/lapor','adminParkirku@daftarLapor')->name('adminLapor');
Route::get('/admin/panduan','adminParkirku@panduanPARKIRKU')->name('panduan');
Route::get('/admin/user/add','adminParkirku@addUserPARKIRKU')->name('addUser');
