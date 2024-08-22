<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembimbinglapangan_id');
            $table->unsignedBigInteger('pembimbingsekolah_id');
            $table->string('nama_kegiatan');
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('pembimbinglapangan_id')->references('id')->on('pembimbinglapangans');
            $table->foreign('pembimbingsekolah_id')->references('id')->on('pembimbingsekolahs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatans');
    }
}