<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdottiCarrelloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblProdottiCarrello', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrello_id')->unsigned();
            $table->integer('prodotto_id')->unsigned();
            $table->integer('numero')->default(1);
            $table->decimal('prezzo', 10, 2)->default(0.00);
            $table->foreign('carrello_id')->references('id')->on('tblCarrelli')->onDelete('cascade');
            $table->foreign('prodotto_id')->references('id')->on('tblProdotti')->onDelete('cascade');
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
        Schema::dropIfExists('tblProdottiCarrello');
    }
}
