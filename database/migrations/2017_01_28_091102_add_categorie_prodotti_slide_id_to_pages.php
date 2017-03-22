<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategorieProdottiSlideIdToPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblPages', function (Blueprint $table) {
            $table->integer('categorie_prodotti_slide_id')->unsigned()->nullable()->default(null)->after('header_slide_id');
            $table->foreign('categorie_prodotti_slide_id')->references('id')->on('tblSlideCategorieProdotti')->onDelete('cascade');
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
            $table->dropForeign('tblPages_categorie_prodotti_slide_id_foreign');
        });

        Schema::table('tblPages', function (Blueprint $table) {
            $table->dropColumn('categorie_prodotti_slide_id');
        });
    }
}
