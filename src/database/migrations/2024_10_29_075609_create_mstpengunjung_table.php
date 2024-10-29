<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstPengunjungTable extends Migration
{
    public function up()
    {
        Schema::create('mstpengunjung', function (Blueprint $table) {
            $table->string('IDUser', 25)->primary();
            $table->string('NIK', 255)->nullable();
            $table->string('NamaLengkap', 255)->nullable();
            $table->string('NoHP', 25)->nullable();
            $table->date('TglRegister')->nullable();
            $table->tinyInteger('IsAktif')->nullable();
            $table->string('Password', 255)->nullable();
            $table->string('Email', 255)->nullable();
            $table->string('FotoProfil', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mstpengunjung');
    }
}