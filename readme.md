# PARKIRKU LARAVEL Version 5.4

## cara menggunakan
copy `.env.example` menjadi `.env` terlebih dahulu, lalu jalankan script berikut pada folder project
laravel dengan menggunakan terminal atau command prompt.
```
php artisan key:generate
```
kemudian setting pada bagian `.env`
```
DB_CONNECTION=mysql  /// jenis database
DB_HOST=127.0.0.1    /// host database
DB_DATABASE=parkir   /// DI ISI nama database yg digunakan
DB_USERNAME=root     /// user database
DB_PASSWORD=cipo     /// password database
```
jika sudah selesai langsung saja jalankan script berikut pada folder project
laravel dengan menggunakan terminal atau command prompt.
```
php artisan migrate
```
setelah `migrate` akan terbentuk table pada database
pada app ini sudah saya masukkan penambahan data secara otomatis
(data bersifat acak) pada kendaraan.
```
php artisan db:seed
```
command diatas akan menjalankan penambahan data otomatis, jika tidak ingin
menbambah data secara otomatis silahkan dilewati.

> command diatas bisa disingkat menjadi
>```
>php artisan migrate --seed
>```
>yang akan menjalankan pembuatan table dan penambahan record secara otomatis


kemudian untuk menjalankan aplikasi
```
php artisan serve
```
Laravel akan berjalan pada 127.0.0.1:8000
