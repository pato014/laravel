<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Airports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Airports', function (Blueprint $table) {
            $table->id();
            $table->string('IDcode');
            $table->string('AirportName');
            $table->string('State');
            $table->string('City');
            $table->string('TimeLine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
