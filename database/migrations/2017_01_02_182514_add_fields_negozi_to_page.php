<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsNegoziToPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblPages', function (Blueprint $table) {
            $table->string('seo_title')->after('id')->default('');
            $table->text('seo_description')->after('seo_title')->nullable()->default(null);
            $table->integer('header_slide_id')->unsigned()->nullable()->default(null)->after('listingCategorieRicette');
            $table->foreign('header_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->string('gm_nome')->default('')->after('header_slide_id');
            $table->string('gm_indirizzo')->default('')->after('gm_nome');
            $table->string('gm_lat',20)->default('')->after('gm_indirizzo');
            $table->string('gm_long',20)->default('')->after('gm_lat');
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
            $table->dropForeign('tblPages_header_slide_id_foreign');
        });

        Schema::table('tblPages', function (Blueprint $table) {
            $table->dropColumn(['seo_title','seo_description','header_slide_id','gm_nome','gm_indirizzo','gm_lat','gm_long',]);
        });
    }
}
