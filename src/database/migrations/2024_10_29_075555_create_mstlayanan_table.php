<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstLayananTable extends Migration
{
    public function up()
    {
        Schema::create('mstlayanan', function (Blueprint $table) {
            $table->string('IDLayanan', 25)->primary();
            $table->string('NamaLayanan', 255)->nullable();
            $table->tinyInteger('IsAktif')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mstlayanan');
    }
}
