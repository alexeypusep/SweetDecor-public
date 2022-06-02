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
        Schema::create('tovars', function (Blueprint $table) {
            $table->uuid('id_tovar');
            $table->primary('id_tovar');
            $table->string('code');
            $table->string('naim');
            $table->string('price_comm');
            $table->string('price');
            $table->string('category');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');
            $table->string('size');
            $table->string('indexsize');
            $table->string('mass');
            $table->string('material');
            $table->string('colorant');
            $table->string('carcass');
            $table->string('storage');
            $table->tinyInteger('del');
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
        Schema::dropIfExists('tovars');
    }
};
