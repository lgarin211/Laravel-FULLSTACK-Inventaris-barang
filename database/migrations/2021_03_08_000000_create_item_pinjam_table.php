<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemPinjamtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pinjam_table', function (Blueprint $table) {
            $table->id();
            $table->string('nama_item');
            $table->string('kondisi_item');
            $table->integer('banyak_item');
            $table->string('peminjam');
            $table->string('kategori');
            $table->integer('pic');
            $table->string('barcode');
            $table->tex('deks');
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
        Schema::dropIfExists('item_pinjam_table');
    }
}
