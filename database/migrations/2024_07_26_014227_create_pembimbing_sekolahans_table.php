<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembimbingsekolahsTable extends Migration
{
    public function up()
    {
        Schema::create('pembimbingsekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembimbingsekolahs');
    }
}