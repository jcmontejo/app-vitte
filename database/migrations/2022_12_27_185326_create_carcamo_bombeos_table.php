<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarcamoBombeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblProcessCarcamoBombeo', function (Blueprint $table) {
            $table->id('dblProcessCarcamoBombeo');
            $table->decimal('indicator1')->nullable();
            $table->decimal('indicator2')->nullable();
            $table->decimal('indicator3')->nullable();
            $table->dateTime('datSampling')->nullable();
            $table->integer('intUser')->nullable();
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
        Schema::dropIfExists('tblProcessCarcamoBombeo');
    }
}
