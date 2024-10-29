<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstPertanyaanSPMTable extends Migration
{
    public function up()
    {
        Schema::create('mstpertanyaanspm', function (Blueprint $table) {
            $table->string('IDPertanyaan', 25)->notNull(); // Pastikan ini NOT NULL
            $table->mediumText('Pertanyaan')->nullable();
            $table->integer('NoUrut')->nullable();
            $table->tinyInteger('IsAktif')->nullable();
            $table->string('JenisSurvey', 25)->notNull(); // Pastikan ini NOT NULL
            $table->primary(['IDPertanyaan', 'JenisSurvey']); // Primary key
        });
    }

    public function down()
    {
        Schema::dropIfExists('mstpertanyaanspm');
    }
}