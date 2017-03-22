<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGoggleMapToHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblHomePages', function (Blueprint $table) {
            $table->string('gm_nome')->default('')->after('desc_tiburtina');
            $table->string('gm_indirizzo')->default('')->after('gm_nome');
            $table->string('gm_lat',20)->default('')->after('gm_indirizzo');
            $table->string('gm_long',20)->default('')->after('gm_lat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblHomePages', function (Blueprint $table) {
            $table->dropColumn('gm_nome');
            $table->dropColumn('gm_indirizzo');
            $table->dropColumn('gm_lat');
            $table->dropColumn('gm_long');
        });
    }
}
