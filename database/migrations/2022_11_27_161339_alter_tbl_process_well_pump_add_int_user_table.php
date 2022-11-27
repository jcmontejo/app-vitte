<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTblProcessWellPumpAddIntUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblProcessWellPump', function (Blueprint $table) {
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
        Schema::table('tblProcessWellPump', function (Blueprint $table) {
            $table->dropColumn('intUser');
        });
    }
}
