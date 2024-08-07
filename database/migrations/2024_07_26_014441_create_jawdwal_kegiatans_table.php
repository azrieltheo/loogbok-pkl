<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('jadwal_kegiatans', function (Blueprint $table) {
            $table->string('ID_JadwalKegiatan')->primary();
            $table->date('Tanggal');
            $table->string('Deskripsi');
            $table->integer('ID_GelombangAngkatan');
            $table->timestamps();
            $table->foreign('ID_GelombangAngkatan')->references('ID_GelombangAngkatan')->on('gelombang_angkatans')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_kegiatans');
    }
};
