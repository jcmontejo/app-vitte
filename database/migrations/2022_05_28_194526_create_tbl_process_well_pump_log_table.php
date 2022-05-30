<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProcessWellPumpLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblProcessWellPumpLog', function (Blueprint $table) {
            $table->id('dblProcessWellPumpLog');
            $table->decimal('indicator1')->nullable();
            $table->decimal('indicator2')->nullable();
            $table->decimal('indicator3')->nullable();
            $table->decimal('indicator4')->nullable();
            $table->decimal('indicator5')->nullable();
            $table->decimal('indicator6')->nullable();
            $table->decimal('indicator7')->nullable();
            $table->dateTime('datSampling')->nullable();
            $table->date('datDelete')->nullable();
            $table->bigInteger('dblCatPlant')->nullable();
            // $table->foreign('dblCatPlant')->references('dblCatPlant')->on('tblCatPlant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblProcessWellPumpLog');
    }
}
