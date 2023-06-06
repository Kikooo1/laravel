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
        Schema::create('vaccines_administered', function (Blueprint $table) {
            $table->id('vaccines_administered_id');
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('vaccine_id');
            $table->timestamps();

            $table->foreign('pet_id')->references('pet_id')->on('pet_info');
            $table->foreign('vaccine_id')->references('vaccine_id')->on('vaccines');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccines_administereds');
    }
};
