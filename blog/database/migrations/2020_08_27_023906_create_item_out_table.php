<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOuttable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_out_table', function (Blueprint $table) {
            $table->id();
            $table->string('nama_item');
            $table->string('kondisi_item');
            $table->integer('banyak_item');
            $table->string('lokasi_item');
            $table->string('kategori');
            $table->string('barcode');
            $table->string('deks');
            $table->timestamps(); });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_outtable');
    }
}
