<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTabellaSlideProdottiWidget extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblSlideProdottiWidget', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->default('');
            $table->integer('slide_id')->unsigned()->nullable()->default(null);
            $table->foreign('slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->string('titolo')->default('');
            $table->text('descrizione')->nullable()->default(null);
            $table->string('url_pagina')->default('');
            $table->string('url_video')->default('');
            $table->timestamps();
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
        Schema::table('tblSlideProdottiWidget', function(Blueprint $table) {
            $table->dropForeign('tblSlideProdottiWidget_slide_id_foreign');
        });
 
        Schema::dropIfExists('tblSlideProdottiWidget');
    }
}
