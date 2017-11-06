<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('kode_barang', 10);
            $table->string('nama_barang', 255);
            $table->string('merk_brand', 100);
            $table->string('model_type', 100);
            $table->float('berat_bruto')->nullable();
            $table->string('ukuran_volume', 100)->nullable();
            $table->string('warna', 50);
            $table->integer('id_kategori');
            $table->integer('id_subkategori');
            $table->integer('id_rak');
            $table->integer('harga_beli');
            $table->integer('jml_minimal');
            $table->integer('jml_maksimal');
            $table->integer('stok');
            $table->integer('ppn');
            $table->string('kode_satuan');
            $table->text('ket')->nullable();
            $table->string('foto_barang')->nullable();
            $table->enum('status_jual', array('ya','tidak'));
            $table->integer('id_user')->unsigned();
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
        Schema::dropIfExists('barangs');
    }
}
