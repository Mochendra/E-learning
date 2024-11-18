<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_tugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('guru_id');
            $table->unsignedBigInteger('tugas_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->string('file_path')->nullable();
            $table->dateTime('tanggal_pengumpulan');
            $table->decimal('nilai', 5, 2)->nullable();
            $table->timestamps();

            $table->foreign('siswa_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('guru_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('tugas_id')
                  ->references('id')
                  ->on('tugas')
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
        Schema::dropIfExists('hasil_tugas');
    }
}