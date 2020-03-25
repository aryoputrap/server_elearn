<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCct3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cct3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelas')->default("text");
            $table->string('nik')->default("text");
            $table->text('nama');
            $table->string('tier11');
            $table->string('tier12');
            $table->string('tier13');
            $table->text('tier13_e');
            $table->string('tier14');
            $table->string('tier21');
            $table->string('tier31');
            $table->string('tier32');
            $table->string('tier33');
            $table->text('tier33_e');
            $table->string('tier34');
            $table->string('tier41');
            $table->string('tier42');
            $table->string('tier43');
            $table->string('tier44');
            $table->string('tier45');
            $table->string('tier61');
            $table->string('tier71');
            $table->string('tier72');
            $table->string('tier73');
            $table->text('tier73_e');
            $table->string('tier74');
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
        Schema::dropIfExists('cct3');
    }
}
