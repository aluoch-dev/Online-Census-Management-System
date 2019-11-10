<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('death_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('household_id')->unsigned();
            $table->foreign('household_id')->references('id')->on('households');
            $table->string('fname');
            $table->string('sname');
            $table->bigInteger('relationship_id')->unsigned()->nullable();
            $table->foreign('relationship_id')->references('id')->on('relationships');
            $table->string('filename')->nullable();
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
        Schema::dropIfExists('death_entries');
    }
}
