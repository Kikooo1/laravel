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
        Schema::create('history', function (Blueprint $table) {
            $table->id('history_id');
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('reason_of_visit_id');
            $table->double('weight_kg');
            $table->dateTime('date_visited');
            $table->timestamps();

            $table->foreign('pet_id')->references('pet_id')->on('pet_info');
            $table->foreign('reason_of_visit_id')->references('reason_of_visit_id')->on('reason_of_visit');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};
