<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddListingCategorieRicetteToPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblPages', function (Blueprint $table) {
            $table->string('listingCategorieRicette')->nullable()->default(null)->after('listingCaratteristiche');
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
            $table->dropColumn('listingCategorieRicette');
        });
    }
}
