<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BikinTabelBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_barang', function (Blueprint $table) {
          $table->increments('id_barang');
          $table->string('nama_barang');
          $table->string('id_vendor');
          $table->double('harga_barang');
          $table->longText('deskripsi');
          $table->string('nama_gambar_utama');
          $table->string('nama_gambar_1');
          $table->string('nama_gambar_2');
          $table->string('nama_gambar_3');
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
        Schema::dropIfExists('tb_barang');
    }
}
