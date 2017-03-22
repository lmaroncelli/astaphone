<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableThreeColumnsWidget extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblThreeColumnsWidget', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->default('');
            
            $table->string('img_1')->nullable()->default('');
            $table->string('titolo_1')->nullable()->default('');
            $table->text('desc_1')->nullable()->default(null);
             $table->string('url_pagina_1')->default('');

             $table->string('img_2')->nullable()->default('');
            $table->string('titolo_2')->nullable()->default('');
            $table->text('desc_2')->nullable()->default(null);
             $table->string('url_pagina_2')->default('');

             $table->string('img_3')->nullable()->default('');
            $table->string('titolo_3')->nullable()->default('');
            $table->text('desc_3')->nullable()->default(null);
             $table->string('url_pagina_3')->default('');
            $table->timestamps();
        });

        Schema::table('tblPages', function (Blueprint $table) {
            $table->integer('three_columns_widget_id')->unsigned()->nullable()->default(null)->after('prodotti_confezionati_widget_id');
            $table->foreign('three_columns_widget_id')->references('id')->on('tblThreeColumnsWidget')->onDelete('cascade');
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
            $table->dropForeign('tblPages_three_columns_widget_id_foreign');
        });
        Schema::table('tblPages', function (Blueprint $table) {
            $table->dropColumn(['three_columns_widget_id']);
        });
        
        Schema::dropIfExists('tblThreeColumnsWidget');

    }
}
