<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmaginiSlideCategorieProdotti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblImmaginiSlideCategorieProdotti', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_id')->unsigned();
            $table->string('nome');
            $table->text('descrizione')->nullable()->default(null);
            $table->string('url_pagina')->default('');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('slide_id')->references('id')->on('tblSlideCategorieProdotti')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('tblCategorie')->onDelete('cascade');
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
        Schema::table('tblImmaginiSlideCategorieProdotti', function(Blueprint $table) {
            $table->dropForeign('tblImmaginiSlideCategorieProdotti_slide_id_foreign');
            $table->dropForeign('tblImmaginiSlideCategorieProdotti_categoria_id_foreign');
        });
        
        Schema::dropIfExists('tblImmaginiSlideCategorieProdotti');
    }
}
