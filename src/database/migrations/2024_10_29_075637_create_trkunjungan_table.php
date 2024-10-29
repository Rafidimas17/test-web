<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrKunjunganTable extends Migration
{
    public function up()
    {
        Schema::create('trkunjungan', function (Blueprint $table) {
            $table->string('IDKunjungan', 25)->primary();
            $table->date('TanggalJam')->nullable();
            $table->time('JamDilayani')->nullable();
            $table->integer('NoAntrian')->nullable();
            $table->enum('StatusAntrian', ['tunggu', 'proses', 'lewati', 'selesai', 'batal'])->nullable();
            $table->string('IDLoket', 25)->nullable();
            $table->string('UserName', 255)->nullable();
            $table->string('IDUser', 25)->nullable();
            $table->float('NilaiSPM')->nullable();
            $table->string('IDLayanan', 25)->nullable();
            $table->foreign('IDLoket')->references('IDLoket')->on('mstloket')->onDelete('set null')->onUpdate('set null');
            $table->foreign('IDUser')->references('IDUser')->on('mstpengunjung')->onDelete('set null')->onUpdate('set null');
            $table->foreign('IDLayanan')->references('IDLayanan')->on('mstlayanan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('UserName')->references('UserName')->on('mstuserlogin')->onDelete('set null')->onUpdate('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('trkunjungan');
    }
}