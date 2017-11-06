<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id_pegawai');
            $table->string('nama', 100);
            $table->string('nip');
            $table->integer('id_jabatan');
            $table->integer('id_golongan');
            $table->integer('id_ruang');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('opd');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
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
        Schema::dropIfExists('pegawais');
    }
}
