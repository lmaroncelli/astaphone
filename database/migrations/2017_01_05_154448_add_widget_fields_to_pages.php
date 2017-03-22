<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWidgetFieldsToPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblPages', function (Blueprint $table) {
            $table->integer('prodotti_freschi_widget_id')->unsigned()->nullable()->default(null)->after('header_slide_id');
            $table->foreign('prodotti_freschi_widget_id')->references('id')->on('tblSlideProdottiWidget')->onDelete('cascade');
            $table->integer('prodotti_confezionati_widget_id')->unsigned()->nullable()->default(null)->after('prodotti_freschi_widget_id');
            $table->foreign('prodotti_confezionati_widget_id')->references('id')->on('tblSlideProdottiWidget')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        // Your foreign keys is named table_fields_foreign
        Schema::table('tblPages', function(Blueprint $table) {
            $table->dropForeign('tblPages_prodotti_freschi_widget_id_foreign');
            $table->dropForeign('tblPages_prodotti_confezionati_widget_id_foreign');
        });
        
        Schema::table('tblPages', function (Blueprint $table) {
            $table->dropColumn(['prodotti_freschi_widget_id','prodotti_confezionati_widget_id',]);
        });
    }
}
