<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCommenti', function (Blueprint $table){
           // our schema is defined in here 
           $table->increments('id');
           $table->integer('post_id');
           $table->text('corpo');
           $table->string('autore');
           //$table->foreign('post_id')->references('id')->on('tblPosts')->onDelete('cascade');
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
        Schema::drop('tblCommenti');
    }
}
