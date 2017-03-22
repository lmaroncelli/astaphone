<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreateCaratteristicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tblCaratteristiche')->insert([
    			['nome' => 'Mobile'], 
    			['nome' => 'Computer'],
    			['nome' => 'Audio'] ,
    			['nome' => 'Storage'], 
    			['nome' => 'Video'],
    			['nome' => 'Household'],
    		]);
    }
}
