<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmaginiSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblImmaginiSlide', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_id')->unsigned();
            $table->string('nome');
            $table->text('descrizione')->nullable()->default(null);
            $table->foreign('slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
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
        Schema::table('tblImmaginiSlide', function(Blueprint $table) {
            $table->dropForeign('tblImmaginiSlide_slide_id_foreign');
        });
        
        Schema::dropIfExists('tblImmaginiSlide');
    }
}
