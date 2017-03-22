<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRicetteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblRicette', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo');
            $table->text('descrizione');    
            $table->text('ingredienti');    
            $table->text('preparazione');    
            $table->string('foto')->nullable()->default('');
            $table->string('title')->default('');
            $table->string('keywords')->default('');            
            $table->text('description'); 
            $table->string('uri')->unique();
            $table->boolean('visibile')->nullable()->default(true);
            $table->integer('categoria_id')->unsigned();
            // se cancello una categoria voglio cancellare a cascata anche tutte le relative ricette
            $table->foreign('categoria_id')->references('id')->on('tblCategorieRicette')->onDelete('cascade');
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
        Schema::dropIfExists('tblRicette');
    }
}
