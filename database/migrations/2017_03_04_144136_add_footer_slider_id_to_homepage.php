<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFooterSliderIdToHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblHomePages', function (Blueprint $table) {
            $table->integer('footer_slide_id')->unsigned()->nullable()->default(null)->after('prodotti_confezionati_slide_id');

            $table->foreign('footer_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
        });

        /* Creo la entry per la slide header della homepage (che viene cercata col nome hp_slide_header) */
        Artisan::call( 'db:seed', [
            '--class' => 'CreateHomePageSlideFooterSeeder',
            '--force' => true
        ]);
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
                $table->dropForeign('tblHomePages_footer_slide_id_foreign');
            });
            
            $table->dropColumn('footer_slide_id');
        
        });
    }
}
