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
        Schema::create('pet_info', function (Blueprint $table) {
            $table->id('pet_id');
            $table->unsignedBigInteger('specie_id');
            $table->string('pet_name', 50);
            $table->string('owner_name', 60);
            $table->string('img', 500);
            $table->timestamps();

            $table->foreign('specie_id')->references('specie_id')->on('species');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_infos');
    }
};
