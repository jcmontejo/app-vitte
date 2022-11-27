<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTblProcessFiltracionAddIntUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblProcessFiltracion', function (Blueprint $table) {
            $table->bigInteger('intFiltro')->nullable();
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
        Schema::table('tblProcessFiltracion', function (Blueprint $table) {
            $table->dropColumn('intFiltro');
            $table->dropColumn('intUser');
        });
    }
}
