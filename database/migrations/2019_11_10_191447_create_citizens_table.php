<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('household_id')->unsigned();
            $table->foreign('household_id')->references('id')->on('households');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname');
            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->string('filename')->nullable();
            $table->bigInteger('relationship_id')->unsigned();
            $table->foreign('relationship_id')->references('id')->on('relationships');
            $table->bigInteger('education_id')->unsigned();
            $table->bigInteger('field_id')->unsigned();
            $table->foreign('field_id')->references('id')->on('study_fields');
            $table->bigInteger('disability_id')->unsigned();
            $table->foreign('disability_id')->references('id')->on('disabilities');
            $table->foreign('education_id')->references('id')->on('education_levels');
            $table->bigInteger('employment_id')->unsigned();
            $table->foreign('employment_id')->references('id')->on('employment_statuses');
            $table->bigInteger('foccupation_id')->unsigned();
            $table->foreign('foccupation_id')->references('id')->on('occupations');
            $table->bigInteger('soccupation_id')->unsigned();
            $table->foreign('soccupation_id')->references('id')->on('occupations');
            $table->bigInteger('toccupation_id')->unsigned();
            $table->foreign('toccupation_id')->references('id')->on('occupations');
            $table->bigInteger('income_source')->unsigned();
            $table->foreign('income_source')->references('id')->on('occupations');
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
        Schema::dropIfExists('citizens');
    }
}