<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTblProcessDesinfeccionAddIntUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblProcessDesinfeccion', function (Blueprint $table) {
            $table->bigInteger('intUser')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblProcessDesinfeccion', function (Blueprint $table) {
            $table->dropColumn('intUser');
        });
    }
}
