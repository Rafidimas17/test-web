<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemSettingTable extends Migration
{
    public function up()
    {
        Schema::create('sistemsetting', function (Blueprint $table) {
            $table->integer('NoSetting')->primary();
            $table->string('NamaSetting', 150)->nullable();
            $table->mediumText('Value1')->nullable();
            $table->mediumText('Value2')->nullable();
            $table->mediumText('Value3')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sistemsetting');
    }
}