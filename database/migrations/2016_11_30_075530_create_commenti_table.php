<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCommenti', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articolo_id')->unsigned()->index();
            $table->text('corpo');
            $table->string('autore');
            $table->foreign('articolo_id')->references('id')->on('tblArticoli')->onDelete('cascade');
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
        Schema::dropIfExists('tblCommenti');
    }
}
