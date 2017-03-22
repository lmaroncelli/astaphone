<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmaginiGalleria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblImmaginiGalleria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('galleria_id')->unsigned();
            $table->string('nome');
            $table->string('titolo')->default('');
            $table->text('descrizione')->nullable()->default(null);
            $table->foreign('galleria_id')->references('id')->on('tblGallerie')->onDelete('cascade');
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
        Schema::dropIfExists('tblImmaginiGalleria');
    }
}
