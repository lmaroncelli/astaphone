<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCategoriaToArticoli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblArticoli', function (Blueprint $table) {
            $table->integer('categoria_id')->unsigned()->index()->after('user_id');
            $table->foreign('categoria_id')->references('id')->on('tblCategorieArticoli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblArticoli', function (Blueprint $table) {
             $table->dropColumn('categoria_id');
        });
    }
}
