<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        /////////////////////
        // Creo ADMIN user //
        /////////////////////
        //$this->call(UserSeeder::class);


        ////////////////////////////////////////////////////////////////
        // importo caratteristiche, categorie e produttori con gli ID //
        ////////////////////////////////////////////////////////////////
        $this->call(CaratteristicheSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(ProduttoriSeeder::class);

        ///////////////////////////////////////
        // importare la tabella  "prodotto"  //
        ///////////////////////////////////////


        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // importo i prodotti dalla tabella "prodotto" che è un dump dell'originale e che rimane anche con migration:rollback //
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $this->call(ImportProdottiSeeder::class);

        /////////////////////////////////////////////////////////////////////////////
        // importo caratteristiche e categorie associate ai prodotti molti-a-molti //
        /////////////////////////////////////////////////////////////////////////////
        $this->call(CaratteristicheProdottiSeeder::class);
        $this->call(CategorieProdottiSeeder::class);
        

        //////////////////////////////////////////////////////////
        // importare le tabelle "ricette" e "categoria_ricette" //
        //////////////////////////////////////////////////////////
        $this->call(ImportCategorieRicetteSeeder::class);
        $this->call(ImportRicetteSeeder::class);

    }
}
