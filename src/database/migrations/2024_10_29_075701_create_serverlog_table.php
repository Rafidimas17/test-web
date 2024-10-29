<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerLogTable extends Migration
{
    public function up()
    {
        Schema::create('serverlog', function (Blueprint $table) {
            $table->string('KodeLog', 25)->primary();
            $table->date('DateTimeLog')->nullable();
            $table->string('JenisTransaksi', 255)->nullable();
            $table->string('NoTransaksi', 255)->nullable();
            $table->string('Action', 255)->nullable();
            $table->mediumText('Dskripsi')->nullable();
            $table->string('IPAddress', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serverlog');
    }
}