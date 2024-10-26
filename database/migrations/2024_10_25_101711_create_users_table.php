<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('role', ['siswa', 'guru', 'admin', 'koorjadwal']);
            $table->string('nomor_induk', 20)->unique()->nullable();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('no_whatsapp', 15)->nullable();
            $table->string('status')->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}