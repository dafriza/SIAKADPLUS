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
        Schema::create('domisili', function (Blueprint $table) {
            $table->id('id_domisili');
            $table->foreignId('id_provinsi')
            ->references('id_provinsi')
            ->on('provinsi')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('id_ibukota')
            ->references('id_ibukota')
            ->on('ibukota')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('domisili');
    }
};
