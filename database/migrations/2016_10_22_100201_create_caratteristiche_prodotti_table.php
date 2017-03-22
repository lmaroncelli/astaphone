<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaratteristicheProdottiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCaratteristicheProdotti', function (Blueprint $table) {
           $table->integer('prodotto_id')->unsigned()->index();
           $table->foreign('prodotto_id')->references('id')->on('tblProdotti')->onDelete('cascade');
           $table->integer('caratteristica_id')->unsigned()->index();
           $table->foreign('caratteristica_id')->references('id')->on('tblCaratteristiche')->onDelete('cascade');
           
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
        Schema::dropIfExists('tblCaratteristicheProdotti');
    }
}
