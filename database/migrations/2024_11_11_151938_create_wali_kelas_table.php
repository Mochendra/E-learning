<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaliKelasTable extends Migration
{
    public function up()
    {
        Schema::create('wali_kelas', function (Blueprint $table) {
            $table->id(); // Kolom ID utama
            $table->foreignId('guru_id')->constrained('users')->onDelete('cascade'); // Menghubungkan ke tabel users
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade'); // Menghubungkan ke tabel kelas
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('wali_kelas');
    }
}