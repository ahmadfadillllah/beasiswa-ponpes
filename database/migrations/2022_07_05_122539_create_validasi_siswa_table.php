<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidasiSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validasi_siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_siswa');
            $table->unsignedBigInteger('id_users');
            $table->string('nim');
            $table->double('nilai_raport');
            $table->double('perilaku');
            $table->double('penghasilan_orang_tua');
            $table->double('tanggungan_orang_tua');
            $table->double('pekerjaan_orang_tua');
            $table->double('kondisi_orang_tua');
            $table->double('total');
            $table->timestamps();

            $table->foreign('id_siswa')->references('id')->on('siswa');
            $table->foreign('id_users')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validasi_siswa');
    }
}
