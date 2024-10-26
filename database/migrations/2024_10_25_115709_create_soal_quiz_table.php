<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_quiz', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quiz_id');
            $table->text('pertanyaan');
            $table->string('pilihan_a')->nullable();
            $table->string('pilihan_b')->nullable();
            $table->string('pilihan_c')->nullable();
            $table->string('pilihan_d')->nullable();
            $table->enum('jawaban_benar', ['A', 'B', 'C', 'D']);
            $table->timestamps();

            $table->foreign('quiz_id')
                  ->references('id')
                  ->on('quiz')
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
        Schema::dropIfExists('soal_quiz');
    }
}