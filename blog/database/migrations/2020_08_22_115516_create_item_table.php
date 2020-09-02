<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('nama_item')->nullable();
            $table->string('kondisi_item')->nullable();
            $table->integer('banyak_item')->nullable();
            $table->string('lokasi_item')->nullable();
            $table->string('kategori')->nullable();
            $table->integer('pos')->nullable();
            $table->string('t_key')->nullable();
            $table->string('barcode')->unique();
            $table->string('deks')->nullable();
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
        Schema::dropIfExists('item');
    }
}
