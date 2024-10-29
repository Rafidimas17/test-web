<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstLoketTable extends Migration
{
    public function up()
    {
        Schema::create('mstloket', function (Blueprint $table) {
            $table->string('IDLoket', 25)->primary();
            $table->string('NamaLoket', 255)->nullable();
            $table->integer('NoLoket')->nullable();
            $table->string('FileAudio', 255)->nullable();
            $table->tinyInteger('IsAktif')->nullable();
            $table->tinyInteger('IsAvailable')->nullable();
            $table->string('UserName', 255)->nullable();
            $table->foreign('UserName')->references('UserName')->on('mstuserlogin')->onDelete('set null')->onUpdate('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mstloket');
    }
}
