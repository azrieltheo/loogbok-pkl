<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembimbinglapangansTable extends Migration
{
    public function up()
    {
        Schema::create('pembimbinglapangans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan'); 
            $table->string('instansi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembimbinglapangans');
    }
}