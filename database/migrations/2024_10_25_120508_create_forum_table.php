<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('guru_id');
            $table->unsignedBigInteger('mata_pelajaran_id');
            $table->unsignedBigInteger('kelas_id');
            $table->timestamps();

            $table->foreign('guru_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('mata_pelajaran_id')
                  ->references('id')
                  ->on('mata_pelajaran')
                  ->onDelete('cascade');

            $table->foreign('kelas_id')
                  ->references('id')
                  ->on('kelas')
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
        Schema::dropIfExists('forum');
    }
}
