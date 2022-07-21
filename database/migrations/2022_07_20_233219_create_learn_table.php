<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learn', function (Blueprint $table) {
            $table->id('id_learn');
            $table->foreignId('id_mahasiswa')
            ->references('id_mahasiswa')
            ->on('mahasiswa')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('id_course')
            ->references('id_course')
            ->on('course')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('judul');
            $table->longText('deskripsi');
            $table->longText('link_youtube');
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
        Schema::dropIfExists('learn');
    }
};
