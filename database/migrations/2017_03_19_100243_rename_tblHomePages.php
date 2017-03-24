<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTblHomePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Your foreign keys is named table_fields_foreign
        // droppo le FK che si chiamano con il nome della tabella vecchia
        Schema::table('tblHomePages', function(Blueprint $table) {
            $table->dropForeign('tblHomePages_header_slide_id_foreign');
            $table->dropForeign('tblHomePages_video_presentazione_slide_id_foreign');
            $table->dropForeign('tblHomePages_prodotti_confezionati_slide_id_foreign');
            $table->dropForeign('tblHomePages_footer_slide_id_foreign');
        });

        //cambio il nome alla tabella
        Schema::rename('tblHomePages', 'tblCustomPages');

        // ricreo le FK con il nome della tabella nuova
        Schema::table('tblCustomPages', function (Blueprint $table) {
            $table->foreign('header_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->foreign('video_presentazione_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->foreign('prodotti_confezionati_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->foreign('footer_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
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
        // droppo le FK che si chiamano con il nome della tabella vecchia
        Schema::table('tblCustomPages', function(Blueprint $table) {
            $table->dropForeign('tblCustomPages_header_slide_id_foreign');
            $table->dropForeign('tblCustomPages_video_presentazione_slide_id_foreign');
            $table->dropForeign('tblCustomPages_prodotti_confezionati_slide_id_foreign');
            $table->dropForeign('tblCustomPages_footer_slide_id_foreign');
        });

        //cambio il nome alla tabella
        Schema::rename('tblCustomPages', 'tblHomePages');

        // ricreo le FK con il nome della tabella nuova
        Schema::table('tblHomePages', function (Blueprint $table) {
            $table->foreign('header_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->foreign('video_presentazione_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->foreign('prodotti_confezionati_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->foreign('footer_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
        });


    }
}
