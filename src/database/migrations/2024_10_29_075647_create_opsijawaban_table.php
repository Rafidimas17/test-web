<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpsiJawabanTable extends Migration
{
    public function up()
    {
        Schema::create('opsijawaban', function (Blueprint $table) {
            $table->integer('NoUrut');
            $table->mediumText('NarasiJawaban')->nullable();
            $table->integer('Skor')->nullable();
            $table->string('IDPertanyaan', 25);
            $table->string('JenisSurvey', 25);
            $table->primary(['NoUrut', 'IDPertanyaan', 'JenisSurvey']);
            $table->foreign(['IDPertanyaan', 'JenisSurvey'])->references(['IDPertanyaan', 'JenisSurvey'])->on('mstpertanyaanspm');
        });
    }

    public function down()
    {
        Schema::dropIfExists('opsijawaban');
    }
}