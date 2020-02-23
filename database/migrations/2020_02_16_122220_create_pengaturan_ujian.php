<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanUjian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturan_ujian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nama_ujian");
            $table->string("waktu");
            $table->string("nilai_min");
            $table->string("peraturan_ujian");
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
        Schema::dropIfExists('pengaturan_ujian');
    }
}
