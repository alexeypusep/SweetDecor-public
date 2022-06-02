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
        Schema::create('klients', function (Blueprint $table) {
            $table->uuid('id_klient');
            $table->primary('id_klient');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('email');
            $table->string('password');
            $table->string('avatar');
            $table->string('phone');
            $table->string('keyactiv');
            $table->string('admin');
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
        Schema::dropIfExists('klients');
    }
};
