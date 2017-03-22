<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSliderIdToHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblHomePages', function (Blueprint $table) {
            $table->integer('prodotti_freschi_slide_id')->unsigned()->nullable()->default(null)->after('header_slide_id');
            $table->integer('prodotti_confezionati_slide_id')->unsigned()->nullable()->default(null)->after('prodotti_freschi_slide_id');
            
            $table->foreign('prodotti_freschi_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->foreign('prodotti_confezionati_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
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

            // Your foreign keys is named table_fields_foreign
            Schema::table('tblHomePages', function(Blueprint $table) {
                $table->dropForeign('tblHomePages_prodotti_freschi_slide_id_foreign');
                $table->dropForeign('tblHomePages_prodotti_confezionati_slide_id_foreign');
            });
            
            $table->dropColumn('prodotti_freschi_slide_id');
            $table->dropColumn('prodotti_confezionati_slide_id');
        });
    }
}
