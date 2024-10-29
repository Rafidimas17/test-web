<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiturLevelTable extends Migration
{
    public function up()
    {
        Schema::create('fiturlevel', function (Blueprint $table) {
            $table->tinyInteger('ViewData')->nullable();
            $table->tinyInteger('AddData')->nullable();
            $table->tinyInteger('EditData')->nullable();
            $table->tinyInteger('DeleteData')->nullable();
            $table->tinyInteger('PrintData')->nullable();
            $table->integer('KodeLevel');
            $table->integer('KodeFitur');
            $table->primary(['KodeLevel', 'KodeFitur']);
            $table->foreign('KodeLevel')->references('KodeLevel')->on('akseslevel');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fiturlevel');
    }
}