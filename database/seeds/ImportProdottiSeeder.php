<?php

use Illuminate\Database\Seeder;

class ImportProdottiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //DB::table('tblProdotti')->truncate();
     
     $prodotti_cel = DB::table('prodotto')->get();

     foreach ($prodotti_cel as $count => $pd) 
     	{
     		DB::table('tblProdotti')->insert([
     		    [
     		    'id' => $pd->id, 
     		    'nome' => $pd->nome,
     		    'codice' => $pd->codice,
     		    'peso' => $pd->peso_prodotto,
     		    'descrizione' => $pd->descrizione,
     		    'scheda' => $pd->scheda_tecnica,
     		    'ingredienti' => $pd->ingredienti,
     		    'uri' => $pd->url,
     		    'title' => $pd->title,
     		    'keywords' => $pd->keywords,
     		    'description' => $pd->description,
     		    'disponibile' => $pd->disponibile,
     		    'novita' => $pd->novita,
     		    'offerta' => $pd->offerta,
     		    'visibile' => $pd->visibile,
     		    'prezzo' => $pd->prezzo,
     		    'prezzo_offerta' => $pd->prezzo_offerta,
     		    'scadenza' => $pd->data_scadenza,
     		    'produttore_id' => $pd->produttore_id,
     		    ]
     		]);
     	}

    }
}
