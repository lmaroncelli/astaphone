<?php

use Illuminate\Database\Seeder;

class CaratteristicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('tblCaratteristiche')->truncate();

      DB::table('tblCaratteristiche')->insert([
      		['id' => 1,'nome' => 'Senza Lievito'], 
      		['id' => 2,'nome' => 'Senza Uova'],
      		['id' => 3,'nome' => 'Senza Sale'] ,
      		['id' => 4,'nome' => 'Senza Lattosio'], 
      		['id' => 5,'nome' => 'Senza Zucchero'],
      		['id' => 6,'nome' => 'Senza Soia'],
      		['id' => 7,'nome' => 'Biologico'],
      		['id' => 8,'nome' => 'Spiga Sbarrata'], 
      	]);
    }
}
