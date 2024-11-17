<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropKodeKelasFromSiswaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa_kelas', function (Blueprint $table) {
            $table->dropColumn('kode_kelas'); // Menghapus kolom kode_kelas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa_kelas', function (Blueprint $table) {
            $table->string('kode_kelas')->nullable(); // Menambahkan kembali kolom kode_kelas jika migrasi dibatalkan
        });
    }
}