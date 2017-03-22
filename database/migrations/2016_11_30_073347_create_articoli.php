<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticoli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblArticoli', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo');
            $table->string('slug');
            $table->text('corpo')->nullable();
            $table->string('immagine')->nullable();
            $table->string('thumb')->nullable();
            $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('tblArticoli');
    }
}
