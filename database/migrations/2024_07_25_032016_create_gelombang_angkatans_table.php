<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGelombangAngkatansTable extends Migration
{
    public function up()
    {
        Schema::create('gelombangangkatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('angkatan_id');
            $table->string('nama_gelombang');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->timestamps();

            $table->foreign('angkatan_id')->references('id')->on('angkatans');
        });
    }

    public function down()
    {
        Schema::dropIfExists('gelombangangkatans');
    }
}