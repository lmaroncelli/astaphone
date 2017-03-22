<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tblCategorie')->insert([
    			['nome' => 'Mobile phone'], 
    			['nome' => 'Tablet'], 
    			['nome' => 'Computer'], 
    			['nome' => 'Notebook'], 
    			['nome' => 'Headphone'], 
    			['nome' => 'Monitor'], 
    			['nome' => 'I/O devices'], 
    		]);
    }
}
