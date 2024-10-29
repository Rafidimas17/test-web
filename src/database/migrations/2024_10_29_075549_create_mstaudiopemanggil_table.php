<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstAudioPemanggilTable extends Migration
{
    public function up()
    {
        Schema::create('mstaudiopemanggil', function (Blueprint $table) {
            $table->string('IDPanggil', 25)->primary();
            $table->integer('Nomor')->nullable();
            $table->string('FileAudio', 255)->nullable();
            $table->string('Nama', 150)->nullable();
            $table->tinyInteger('IsAktif')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mstaudiopemanggil');
    }
}
