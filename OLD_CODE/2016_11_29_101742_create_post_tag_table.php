<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblTagPost', function (Blueprint $table){
                $table->integer('tag_id')->unsigned()->index();
                $table->integer('post_id')->unsigned()->index();
                //$table->foreign('tag_id')->references('id')->on('tblTags')->onDelete('cascade'); 
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
        Schema::drop('tblTagPost');
    }
}
