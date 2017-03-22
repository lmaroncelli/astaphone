<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddListingFieldsToPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblPages', function (Blueprint $table) {
            $table->boolean('listing')->default(false)->after('content');
            $table->string('listingCategorie')->nullable()->default(null)->after('listing');
            $table->string('listingCaratteristiche')->nullable()->default(null)->after('listingCategorie');
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
            $table->dropColumn('listing');
            $table->dropColumn('listingCategorie');
            $table->dropColumn('listingCaratteristiche');
        });
    }
}
