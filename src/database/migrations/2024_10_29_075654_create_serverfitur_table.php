<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerFiturTable extends Migration
{
    public function up()
    {
        Schema::create('serverfitur', function (Blueprint $table) {
            $table->integer('KodeFitur')->primary();
            $table->integer('NoUrut')->nullable();
            $table->string('NamaFitur', 250)->nullable();
            $table->string('KelompokFitur', 255)->nullable();
            $table->tinyInteger('IsAktif')->nullable();
            $table->text('Icon')->nullable();
            $table->string('Slug', 255)->nullable();
            $table->string('Url', 255)->nullable();
            $table->string('Method', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serverfitur');
    }
}