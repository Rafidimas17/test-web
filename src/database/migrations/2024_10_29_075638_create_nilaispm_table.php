<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSPMTable extends Migration
{
    public function up()
    {
        Schema::create('nilaispm', function (Blueprint $table) {
            $table->string('IDKunjungan', 25);
            $table->string('IDPertanyaan', 25);
            $table->string('JawabUser', 255)->nullable();
            $table->integer('SkorUser')->nullable();
            $table->string('JenisSurvey', 25);
            $table->primary(['IDKunjungan', 'IDPertanyaan', 'JenisSurvey']);
            $table->foreign(['IDKunjungan'])->references('IDKunjungan')->on('trkunjungan');
            $table->foreign(['IDPertanyaan', 'JenisSurvey'])->references(['IDPertanyaan', 'JenisSurvey'])->on('mstpertanyaanspm');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilaispm');
    }
}
