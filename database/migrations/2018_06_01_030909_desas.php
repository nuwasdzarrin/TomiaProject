<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Desas extends Migration
{
    public function up()
    {
        Schema::create('desas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('sing');
            $table->string('panj');
            $table->string('maps');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('desas');
    }
}
