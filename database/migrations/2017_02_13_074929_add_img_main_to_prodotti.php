<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgMainToProdotti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblProdotti', function (Blueprint $table) {
            $table->string('img_main')->nullable()->default('')->after('codice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblProdotti', function (Blueprint $table) {
            $table->dropColumn('img_main');
        });
    }
}
