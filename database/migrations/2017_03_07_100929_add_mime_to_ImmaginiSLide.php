<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMimeToImmaginiSLide extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblImmaginiSlide', function (Blueprint $table) {
            $table->string('mime')->default('')->after('descrizione');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblImmaginiSlide', function (Blueprint $table) {
            $table->dropColumn('mime');
        });
    }
}
