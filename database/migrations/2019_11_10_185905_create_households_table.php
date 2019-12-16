<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseholdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('households', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->bigInteger('county_id')->unsigned();
            $table->foreign('county_id')->references('id')->on('counties');
            $table->bigInteger('subcounty_id')->unsigned();
            $table->foreign('subcounty_id')->references('id')->on('subcounties');
            $table->bigInteger('school_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools');
            $table->bigInteger('cookingmeans_id')->unsigned();
            $table->foreign('cookingmeans_id')->references('id')->on('amenities');
            $table->bigInteger('structure_id')->unsigned();
            $table->foreign('structure_id')->references('id')->on('amenities');
            $table->bigInteger('disposal_id')->unsigned();
            $table->foreign('disposal_id')->references('id')->on('amenities');
            $table->integer('deathcounts')->nullable()->default(0);
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
        Schema::dropIfExists('households');
    }
}
