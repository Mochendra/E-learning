<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveGuruColumnFromJadwalTable extends Migration
{
    public function up()
    {
        Schema::table('jadwal', function (Blueprint $table) {
            // Hapus kolom guru
            $table->dropColumn('guru');
        });
    }

    public function down()
    {
        Schema::table('jadwal', function (Blueprint $table) {
            // Kembalikan kolom guru jika perlu
            $table->string('guru')->nullable();
        });
    }
}