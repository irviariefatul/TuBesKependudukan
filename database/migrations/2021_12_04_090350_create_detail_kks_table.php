<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kartukeluarga_id');
            $table->foreign('kartukeluarga_id')->references('id')->on('kartu_keluargas')->onDelete('cascade');
            $table->unsignedBigInteger('penduduk_id');
            $table->foreign('penduduk_id')->references('id')->on('penduduks')->onDelete('cascade');
            $table->string('hubungan')->nullable();
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
        Schema::dropIfExists('detail_kks');
    }
}
