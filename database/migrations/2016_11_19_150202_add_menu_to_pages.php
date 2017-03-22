<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuToPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblPages', function (Blueprint $table) {
            $table->boolean('inMenu')->default(false)->after('uri');
            $table->integer('padre_id')->unsigned()->default(0)->after('inMenu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblPages', function (Blueprint $table) {
            $table->dropColumn('inMenu');
            $table->dropColumn('padre_id');
        });
    }
}
