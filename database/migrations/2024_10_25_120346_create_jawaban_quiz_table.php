<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_quiz', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('quiz_id');
            $table->unsignedBigInteger('soal_quiz_id');
            $table->enum('jawaban_siswa', ['A', 'B', 'C', 'D']);
            $table->boolean('benar');
            $table->timestamps();

            $table->foreign('siswa_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('quiz_id')
                  ->references('id')
                  ->on('quiz')
                  ->onDelete('cascade');

            $table->foreign('soal_quiz_id')
                  ->references('id')
                  ->on('soal_quiz')
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
        Schema::dropIfExists('jawaban_quiz');
    }
}