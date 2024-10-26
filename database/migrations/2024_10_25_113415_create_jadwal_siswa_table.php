<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->timestamps();

            $table->foreign('siswa_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('jadwal_id')
                  ->references('id')
                  ->on('jadwal')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_siswa');
    }
}