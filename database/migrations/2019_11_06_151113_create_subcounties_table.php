<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcountiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcounties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subcounty_name');
            $table->Integer('county_id');
            $table->foreign('county_id')->references('id')->on('counties');
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
        Schema::table('subcounties', function (Blueprint $table) {
            
            Schema::dropIfExists('subcounties');
        });
    }
}
