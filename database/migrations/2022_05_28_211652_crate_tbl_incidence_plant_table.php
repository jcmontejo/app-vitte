<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateTblIncidencePlantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblIncidencePlant', function (Blueprint $table) {
            $table->id('dblIncidencePlant');
            $table->string('indicator1')->nullable();
            $table->string('indicator2')->nullable();
            $table->string('indicator3')->nullable();
            $table->string('indicator4')->nullable();
            $table->string('indicator5')->nullable();
            $table->string('indicator6')->nullable();
            $table->string('indicator7')->nullable();
            $table->dateTime('datIncidende')->nullable();
            $table->softDeletes();
            $table->bigInteger('dblCatPlant')->nullable();
            $table->foreign('dblCatPlant')->references('dblCatPlant')->on('tblCatPlant');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblIncidencePlant');
    }
}
