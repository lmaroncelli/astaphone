<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('tblCategorie')->truncate();

      DB::table('tblCategorie')->insert([
      		['id' => 1,'nome' => 'Pane pizza e...'], 
      		['id' => 2,'nome' => 'Dolci e Biscotti'],
      		['id' => 3,'nome' => 'Farine'] ,
      		['id' => 4,'nome' => 'Pasta e Riso'], 
      		['id' => 5,'nome' => 'Freschi e artigianali'],
      		['id' => 6,'nome' => 'Area Bimbi'],
      		['id' => 7,'nome' => 'Varie'],
      	]);
    }
}
