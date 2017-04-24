<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFiledsToCustomPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblCustomPages', function (Blueprint $table) {
            $table->integer('categorie_prodotti_slide_id')->unsigned()->nullable()->default(null)->after('header_slide_id');
            $table->foreign('categorie_prodotti_slide_id')->references('id')->on('tblSlideCategorieProdotti');
            
            $table->integer('three_columns_widget_id')->unsigned()->nullable()->default(null)->after('prodotti_confezionati_slide_id');
            $table->foreign('three_columns_widget_id')->references('id')->on('tblThreeColumnsWidget');

            $table->integer('prodotti_freschi_widget_id')->unsigned()->nullable()->default(null)->after('three_columns_widget_id');
            $table->foreign('prodotti_freschi_widget_id')->references('id')->on('tblSlideProdottiWidget');
            $table->integer('prodotti_confezionati_widget_id')->unsigned()->nullable()->default(null)->after('prodotti_freschi_widget_id');
            $table->foreign('prodotti_confezionati_widget_id')->references('id')->on('tblSlideProdottiWidget');

            $table->integer('categorie_prodotti_altra_slide_id')->unsigned()->nullable()->default(null)->after('categorie_prodotti_slide_id');
            $table->foreign('categorie_prodotti_altra_slide_id')->references('id')->on('tblSlideCategorieProdotti');

            $table->integer('prodotti_widget_id')->unsigned()->nullable()->default(null)->after('prodotti_freschi_widget_id');
            $table->foreign('prodotti_widget_id')->references('id')->on('tblSlideProdottiWidget');

            $table->string('titolo_add_1')->after('gm_icon3')->default('');
            $table->text('content_add_1')->nullable()->default(null)->after('titolo_add_1');

            $table->string('titolo_add_2')->after('content_add_1')->default('');
            $table->text('content_add_2')->nullable()->default(null)->after('titolo_add_2');

            $table->string('titolo_add_3')->after('content_add_2')->default('');
            $table->text('content_add_3')->nullable()->default(null)->after('titolo_add_3');

            $table->string('titolo_add_4')->after('content_add_3')->default('');
            $table->text('content_add_4')->nullable()->default(null)->after('titolo_add_4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('tblCustomPages', function (Blueprint $table) {
            // NUOVA SINTASSI
            Schema::table('tblCustomPages', function(Blueprint $table) {
                 $table->dropForeign(['categorie_prodotti_slide_id']);
            });
            Schema::table('tblCustomPages', function (Blueprint $table) {
                $table->dropColumn('categorie_prodotti_slide_id');
            });

            Schema::table('tblCustomPages', function(Blueprint $table) {
                 $table->dropForeign(['three_columns_widget_id']);
            });
            Schema::table('tblCustomPages', function (Blueprint $table) {
                $table->dropColumn('three_columns_widget_id');
            });

            Schema::table('tblCustomPages', function(Blueprint $table) {
                $table->dropForeign(['prodotti_freschi_widget_id']);
                $table->dropForeign(['prodotti_confezionati_widget_id']);
            });
            Schema::table('tblCustomPages', function (Blueprint $table) {
                $table->dropColumn(['prodotti_freschi_widget_id','prodotti_confezionati_widget_id',]);
            });

            Schema::table('tblCustomPages', function(Blueprint $table) {
                 $table->dropForeign(['categorie_prodotti_altra_slide_id']);
            });
            Schema::table('tblCustomPages', function (Blueprint $table) {
                $table->dropColumn('categorie_prodotti_altra_slide_id');
            });
        
            Schema::table('tblCustomPages', function (Blueprint $table) {
               $table->dropForeign(['prodotti_widget_id']);
               $table->dropColumn(['prodotti_widget_id']);
           });

            Schema::table('tblCustomPages', function (Blueprint $table) {
                $table->dropColumn(['titolo_add_1','content_add_1','titolo_add_2','content_add_2','titolo_add_3','content_add_3','titolo_add_4','content_add_4']);
            });

        });
    }
}
