<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblPosts', function (Blueprint $table){
           // our schema is defined in here 
           $table->increments('id');
           $table->string('titolo');
           $table->text('descrizione');
           $table->text('corpo');
           $table->string('autore');
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
        Schema::drop('tblPosts');
    }
}
