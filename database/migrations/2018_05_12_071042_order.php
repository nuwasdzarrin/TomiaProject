<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pembelian')->unique();
            $table->string('id_paket');
            $table->string('nama_pemesan',50);
            $table->string('email',50);
            $table->string('no_hp',20);
            $table->string('jumlah',2);
            $table->date('tgl_keberangkatan');
            $table->string('status',2);
            $table->string('gambar',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
