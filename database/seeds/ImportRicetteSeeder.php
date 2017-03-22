<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportRicetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //DB::table('tblRicette')->truncate();
    
    $ricette_cel = DB::table('ricette')->where('categoria','!=', null)->get();
    
    foreach ($ricette_cel as $count => $ric) 
    	{
    		DB::table('tblRicette')->insert([
    		    [
    		    'id' => $ric->id, 
    		    'titolo' => $ric->titolo,
    		    'descrizione' => $ric->descrizione,
    		    'ingredienti' => $ric->ingredienti,
    		    'preparazione' => $ric->preparazione,
    		    'foto' => $ric->foto,
    		    'uri' => $ric->url,
    		    'title' => $ric->title,
    		    'keywords' => $ric->keywords,
    		    'description' => $ric->description,
                'visibile' => $ric->visibile,
    		    'categoria_id' => $ric->categoria,
    		    ]
    		]);
    	}

    }
}
