<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProcessOxidacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblProcessOxidacion', function (Blueprint $table) {
            $table->id('dblProcessOxidacion');
            $table->decimal('indicator1')->nullable();
            $table->decimal('indicator2')->nullable();
            $table->decimal('indicator3')->nullable();
            $table->decimal('indicator4')->nullable();
            $table->decimal('indicator5')->nullable();
            $table->decimal('indicator6')->nullable();
            $table->decimal('indicator7')->nullable();
            $table->dateTime('datSampling')->nullable();
            $table->softDeletes();
            $table->bigInteger('dblCatPlant')->nullable();
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
        Schema::dropIfExists('tblProcessOxidacion');
    }
}
