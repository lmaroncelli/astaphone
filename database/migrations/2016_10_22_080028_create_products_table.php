<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblProdotti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->default('');
            $table->string('codice')->default('');
            $table->string('peso')->default('');
            $table->text('descrizione');            
            $table->text('scheda')->nullable();            
            $table->text('ingredienti')->nullable();            
            $table->integer('disponibile')->default(0);
            $table->date('scadenza')->nullable()->default(null);
            $table->decimal('prezzo', 10, 2)->default(0.00);
            $table->decimal('prezzo_offerta', 10, 2)->default(0.00);
            $table->boolean('novita')->nullable()->default(false);
            $table->boolean('offerta')->default(false);
            $table->boolean('visibile')->default(false);
            $table->string('uri')->unique();
            $table->string('title')->default('');
            $table->string('keywords')->default('');            
            $table->text('description')->nullable()->default(null);            
            $table->integer('produttore_id')->unsigned();
            // se cancello un produttore voglio cancellare a cascata anche tutti i prodotti di quel produttore
            $table->foreign('produttore_id')->references('id')->on('tblProduttori')->onDelete('cascade');
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
        Schema::dropIfExists('tblProdotti');
    }
}
