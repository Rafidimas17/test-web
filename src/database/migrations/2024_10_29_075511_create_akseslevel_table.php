<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAksesLevelTable extends Migration
{
    public function up()
    {
        Schema::create('akseslevel', function (Blueprint $table) {
            $table->integer('KodeLevel')->primary();
            $table->string('NamaLevel', 150)->nullable();
            $table->tinyInteger('IsAktif')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('akseslevel');
    }
}