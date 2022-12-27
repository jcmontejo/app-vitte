<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMezcladorEstaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblProcessMezcladorEstatico', function (Blueprint $table) {
            $table->id('dblProcessMezcladorEstatico');
            $table->decimal('indicator1')->nullable();
            $table->decimal('indicator2')->nullable();
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
        Schema::dropIfExists('tblProcessMezcladorEstatico');
    }
}
