<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTblCatPlantAddFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblCatPlant', function (Blueprint $table) {
            $table->string('dblFactorCloroResidual')->nullable();
            $table->decimal('dblFlujoDisenioOxidante')->nullable();
            $table->bigInteger('intModeloBomba')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblCatPlant', function (Blueprint $table) {
            $table->dropColumn('dblFactorCloroResidual');
            $table->dropColumn('dblFlujoDisenioOxidante');
            $table->dropColumn('intModeloBomba');
        });
    }
}
