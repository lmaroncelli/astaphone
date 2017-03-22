<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportCategorieRicetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //DB::table('tblCategorieRicette')->truncate();
    
    $categorie_ricette_cel = DB::table('categoria_ricette')->get();


    foreach ($categorie_ricette_cel as $count => $cat) 
    	{
    		DB::table('tblCategorieRicette')->insert([
    		    [
    		    'id' => $cat->id, 
    		    'nome' => $cat->nome,
    		    'img' => $cat->foto,
    		    'uri' => $cat->url,
    		    'title' => $cat->title,
    		    'keywords' => $cat->keywords,
    		    'description' => $cat->description,
    		    'ordine' => $cat->ordine,
    		    ]
    		]);
    	}
    
    }
}
