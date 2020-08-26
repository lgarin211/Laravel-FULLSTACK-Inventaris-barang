<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomputerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komputer', function (Blueprint $table) {
            $table->id();
            $table->string('RAM')->nullable();
            $table->string('HDD')->nullable();
            $table->string('SYMT')->nullable();
            $table->string('Prosesor')->nullable();
            $table->string('TPS')->nullable();
            $table->string('Komputer_barcode')->unique();
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
        Schema::dropIfExists('komputer');
    }
}
