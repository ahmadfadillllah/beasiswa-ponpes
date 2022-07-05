<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteriasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_siswa');
            $table->double('nilai_raport');
            $table->integer('perilaku');
            $table->bigInteger('penghasilan_orang_tua');
            $table->integer('tanggungan_orang_tua');
            $table->string('pekerjaan_orang_tua');
            $table->string('kondisi_orang_tua');
            $table->string('surat_keterangan_tidak_mampu');
            $table->timestamps();

            $table->foreign('id_siswa')->references('id')->on('siswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kriteriasiswa');
    }
}
