<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorldcitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worldcities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city');
            $table->string('city_ascii');
            $table->float('lat');
            $table->float('lng');
            $table->string('country');
            $table->string('iso2');
            $table->string('iso3');
            $table->integer('population');
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
        Schema::dropIfExists('worldcities');
    }
}
