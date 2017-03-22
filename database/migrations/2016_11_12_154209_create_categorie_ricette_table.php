<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorieRicetteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCategorieRicette', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('uri')->unique();
            $table->string('img')->nullable()->default('');
            $table->string('title')->default('');
            $table->string('keywords')->default('');            
            $table->text('description'); 
            $table->integer('ordine')->default(0);           
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
        Schema::dropIfExists('tblCategorieRicette');
    }
}
