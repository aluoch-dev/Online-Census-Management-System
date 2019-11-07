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
            $table->bigIncrements('id');
            $table->integer('household_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname');
            $table->string('filename')->nullable();
            $table->string('relationship');
            $table->string('education_level');
            $table->string('employment_status');
            $table->string('job_description');
            $table->string('income/month');
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
