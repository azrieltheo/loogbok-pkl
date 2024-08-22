<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalkegiatansTable extends Migration
{
    public function up()
    {
        Schema::create('jadwalkegiatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kegiatan_id');
            $table->unsignedBigInteger('gelombangangkatan_id');
            $table->unsignedBigInteger('siswapkl_id');
            $table->timestamps();

            $table->foreign('kegiatan_id')->references('id')->on('kegiatans');
            $table->foreign('gelombangangkatan_id')->references('id')->on('gelombangangkatans');
            $table->foreign('siswapkl_id')->references('id')->on('siswapkls');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwalkegiatans');
    }
}