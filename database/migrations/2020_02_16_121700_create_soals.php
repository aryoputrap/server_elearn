<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("gambar");
            $table->text("soal");
            $table->string("jawaban_a");
            $table->string("jawaban_b");
            $table->string("jawaban_c");
            $table->string("jawaban_d");
            $table->string("jawaban_e");
            $table->string("kunci_jawaban");
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
        Schema::dropIfExists('soals');
    }
}
