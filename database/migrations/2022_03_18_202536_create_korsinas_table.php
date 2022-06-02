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
        Schema::create('korsinas', function (Blueprint $table) {
            $table->uuid('id_korsin');
            $table->primary('id_korsin');
            $table->char('id_tovar');
            $table->foreign('id_tovar')->references('id_tovar')->on('tovars')->onDelete('cascade');
            $table->char('id_klient');
            $table->foreign('id_klient')->references('id_klient')->on('klients')->onDelete('cascade');
            $table->integer('amount');
            $table->string('comment');
            $table->string('del');
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
        Schema::dropIfExists('korsinas');
    }
};
