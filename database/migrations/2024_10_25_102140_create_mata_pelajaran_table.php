<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('kode_kelas', 5);
            $table->unsignedBigInteger('semester_id');
            $table->timestamps();

            $table->foreign('semester_id')
                  ->references('id')
                  ->on('semesters')
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
        Schema::dropIfExists('mata_pelajaran');
    }
}