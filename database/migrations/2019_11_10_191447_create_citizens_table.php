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
            $table->bigInteger('household_id')->unsigned()->nullable();
            $table->foreign('household_id')->references('id')->on('households');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname');
            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->bigInteger('Age');
            $table->string('filename')->nullable();
            $table->bigInteger('relationship_id')->unsigned()->nullable();
            $table->foreign('relationship_id')->references('id')->on('relationships');
            $table->bigInteger('education_id')->unsigned()->nullable();
            $table->bigInteger('field_id')->unsigned()->nullable();
            $table->foreign('field_id')->references('id')->on('study_fields');
            $table->bigInteger('disability_id')->unsigned()->nullable();
            $table->foreign('disability_id')->references('id')->on('disabilities');
            $table->foreign('education_id')->references('id')->on('education_levels');
            $table->bigInteger('employment_id')->unsigned()->nullable();
            $table->foreign('employment_id')->references('id')->on('employment_statuses');
            $table->bigInteger('occupation_id')->unsigned()->nullable();
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->bigInteger('income_source')->unsigned()->nullable();
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
