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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id('id_mahasiswa');
            $table->foreignId('id_course')
            ->references('id_course')
            ->on('course')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('id_domisili')
            ->references('id_domisili')
            ->on('domisili')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('nama',50);
            $table->string('nim',50);
            $table->integer('PIC');
            $table->string('studi',50);
            $table->string('phone',20);
            $table->string('email',255);
            $table->string('email_kampus',255);
            $table->string('web',255);
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
        Schema::dropIfExists('mahasiswa');
    }
};
