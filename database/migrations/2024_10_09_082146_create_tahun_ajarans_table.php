<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tahun_ajarans', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tahun_ajarans');
    }
};
