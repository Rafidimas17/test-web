<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstUserLoginTable extends Migration
{
    public function up()
    {
        Schema::create('mstuserlogin', function (Blueprint $table) {
            $table->string('UserName', 255)->primary();
            $table->string('NamaLengkap', 255)->nullable();
            $table->string('NoHP', 50)->nullable();
            $table->tinyInteger('IsAktif')->nullable();
            $table->string('Password', 255)->nullable();
            $table->integer('KodeLevel')->nullable();
            $table->tinyInteger('IsPetugasLoket')->nullable()->default(0);
            $table->tinyInteger('IsAdmin')->nullable()->default(0);
            $table->foreign('KodeLevel')->references('KodeLevel')->on('akseslevel')->onDelete('set null')->onUpdate('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mstuserlogin');
    }
}
