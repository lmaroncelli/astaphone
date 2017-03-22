<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabellaHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblHomePages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seo_title')->default('');
            $table->text('seo_description')->nullable()->default(null);
            $table->text('content')->nullable()->default(null);
            $table->boolean('listing')->default(false);
            $table->string('listingCategorie')->nullable()->default(null);
            $table->string('listingCaratteristiche')->nullable()->default(null);
            $table->integer('header_slide_id')->unsigned()->nullable()->default(null);
            $table->foreign('header_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            $table->string('img_magliana')->nullable()->default('');
            $table->text('desc_magliana')->nullable()->default(null);
            $table->string('img_cipro')->nullable()->default('');
            $table->text('desc_cipro')->nullable()->default(null);
            $table->string('img_tiburtina')->nullable()->default('');
            $table->text('desc_tiburtina')->nullable()->default(null);
            $table->timestamps();
        });

        /* Creo la entry per la homepage */
        Artisan::call( 'db:seed', [
            '--class' => 'CreateHomePageSeeder',
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
        // Your foreign keys is named table_fields_foreign
        Schema::table('tblHomePages', function(Blueprint $table) {
            $table->dropForeign('tblHomePages_header_slide_id_foreign');
        });
        
        Schema::dropIfExists('tblHomePages');
    }
}
