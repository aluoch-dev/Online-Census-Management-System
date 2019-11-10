<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('school_name');
            $table->bigInteger('county_id')->unsigned();
            $table->foreign('county_id')->references('id')->on('counties');
            $table->bigInteger('subcounty_id')->unsigned();
            $table->foreign('subcounty_id')->references('id')->on('subcounties');
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
        Schema::dropIfExists('schools');
    }
}
