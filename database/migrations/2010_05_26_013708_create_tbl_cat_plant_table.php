<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCatPlantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCatPlant', function (Blueprint $table) {
            $table->id('dblCatPlant');
            $table->integer('intConsecutive');
            $table->date('datCreate');
            $table->string('strName');
            $table->text('strAddress')->nullable();
            $table->string('intLatitude')->nullable();
            $table->string('intLongitude')->nullable();
            $table->string('strFileImage')->nullable();
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
        Schema::dropIfExists('tblCatPlant');
    }
}
