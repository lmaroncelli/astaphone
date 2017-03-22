<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblSlide', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo')->default('');
            $table->timestamps();
        });

        /* Creo la entry per la slide header della homepage (che viene cercata col nome hp_slide_header) */
        Artisan::call( 'db:seed', [
            '--class' => 'CreateHomePageSlideHeaderSeeder',
            '--force' => true
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblSlide');
    }
}
