<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TrucateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tblCaratteristicheProdotti')->truncate();
        DB::table('tblCaratteristiche')->truncate();
        DB::table('tblCategorieProdotti')->truncate();
        DB::table('tblCategorie')->truncate();
        DB::table('tblProduttori')->truncate();        
        DB::table('tblProdotti')->truncate();

        Artisan::call( 'db:seed', [
            '--class' => 'CreateProduttoriSeeder',
            '--force' => true
        ]);

        Artisan::call( 'db:seed', [
            '--class' => 'CreateCaratteristicheSeeder',
            '--force' => true
        ]);

         Artisan::call( 'db:seed', [
            '--class' => 'CreateCategorieSeeder',
            '--force' => true
        ]);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
