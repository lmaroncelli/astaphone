<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOthersGmapFieldsToHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('tblHomePages', function (Blueprint $table) {
        $table->string('gm_info')->default('')->after('gm_long');
        $table->string('gm_lat2',20)->default('')->after('gm_info');
        $table->string('gm_long2',20)->default('')->after('gm_lat2');
        $table->string('gm_info2')->default('')->after('gm_long2');        
        $table->string('gm_lat3',20)->default('')->after('gm_info2');
        $table->string('gm_long3',20)->default('')->after('gm_lat3');
        $table->string('gm_info3')->default('')->after('gm_long3'); 
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
        $table->dropColumn('gm_info');
        $table->dropColumn('gm_lat2');
        $table->dropColumn('gm_long2');
        $table->dropColumn('gm_info2');
        $table->dropColumn('gm_lat3');
        $table->dropColumn('gm_long3');
        $table->dropColumn('gm_info3');
    });
    }
}
