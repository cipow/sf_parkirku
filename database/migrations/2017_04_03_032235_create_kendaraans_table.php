<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
          $table->increments('id');
          $table->string('noPlat');
          $table->string('tipeKendaraan');
          $table->string('gedung');
          $table->integer('kondisi');
          $table->string('pencatatMasuk');
          $table->string('pencatatKeluar');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}
