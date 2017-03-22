<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGmapImageFieldsToHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblHomePages', function (Blueprint $table) {
            $table->string('gm_info_img')->default('')->after('gm_info');
            $table->string('gm_icon')->default('')->after('gm_info_img');

            $table->string('gm_info2_img')->default('')->after('gm_info2');
            $table->string('gm_icon2')->default('')->after('gm_info2_img');
            
            $table->string('gm_info3_img')->default('')->after('gm_info3');
            $table->string('gm_icon3')->default('')->after('gm_info3_img');
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
            $table->dropColumn('gm_info_img');
            $table->dropColumn('gm_icon');
            $table->dropColumn('gm_info2_img');
            $table->dropColumn('gm_icon2');
            $table->dropColumn('gm_info3_img');
            $table->dropColumn('gm_icon3');
        });
    }
}
