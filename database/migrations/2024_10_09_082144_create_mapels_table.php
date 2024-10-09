<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mapels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mapel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mapels');
    }
};
