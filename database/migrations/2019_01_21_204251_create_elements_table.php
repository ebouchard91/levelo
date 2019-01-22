<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type', [
                'FRAME',
                'FORK',
                'WHEELS',
                'TYRES',
                'CRANKSET',
                'CASSETTE',
                'FRONT MECH',
                'REAR MECH',
                'CHAIN',
                'SHIFT',
                'BRAKES',
                'HANDLEBAR',
                'TAPE',
                'STEM',
                'SPACER',
                'SADDLE',
                'SEAT POST',
                'BIKE COMPUTER',
                'PEDALS',
                'BOTTLE CAGE',
                'OTHER']);
            $table->unsignedInteger('weight');
            $table->longText('description');
            $table->unsignedInteger('build_id');
            $table->timestamps();

            $table->foreign('build_id')->references('id')->on('builds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
}
