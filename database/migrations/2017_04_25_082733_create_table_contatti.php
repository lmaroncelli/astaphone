<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContatti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblContatti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('email')->default('');
            $table->string('telephone')->default('');
            $table->text('message')->nullable()->default(null);
            $table->date('data_invio')->default(date("Y-m-d H:i:s"));
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
        Schema::dropIfExists('tblContatti');
    }
}
