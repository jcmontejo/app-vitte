<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProcessDesinfeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblProcessDesinfeccion', function (Blueprint $table) {
            $table->id('dblProcessDesinfeccion');
            $table->decimal('indicator1')->nullable();
            $table->decimal('indicator2')->nullable();
            $table->decimal('indicator3')->nullable();
            $table->decimal('indicator4')->nullable();
            $table->decimal('indicator5')->nullable();
            $table->decimal('indicator6')->nullable();
            $table->decimal('indicator7')->nullable();
            $table->decimal('indicator8')->nullable();
            $table->decimal('indicator9')->nullable();
            $table->decimal('indicator10')->nullable();
            $table->dateTime('datSampling')->nullable();
            $table->softDeletes();
            $table->bigInteger('dblCatPlant')->nullable();
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
        Schema::dropIfExists('tblProcessDesinfeccion');
    }
}
