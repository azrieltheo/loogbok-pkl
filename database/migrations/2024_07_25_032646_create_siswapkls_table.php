<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswapklsTable extends Migration
{
    public function up()
    {
        Schema::create('siswapkls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('angkatan_id');
            $table->string('nis');
            $table->string('nama');
            $table->string('kelas'); 
            $table->string('jurusan');
            $table->timestamps();

            $table->foreign('angkatan_id')->references('id')->on('angkatans');
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswapkls');
    }
}