<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateHomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //DB::table("tblHomePages")->truncate();
    	DB::table('tblHomePages')->insert(
    	    [
    	    'seo_title' => "Celiachiamo.com: celiachia e prodotti senza glutine", 
    	    'seo_description' => "Celiachiamo.com: il portale internet dedicato alla celiachia ed alla vendita on line di prodotti senza glutine garantiti. Informazioni sulla celiachia, alimenti senza glutine e per altre intolleranze alimentari. Sintomi, diagnosi, ricette, filmati, consigli per noi celiaci.",
    	    'content' => "Celiachiamo.com: il portale dedicato al mondo della celiachia, dei prodotti senza glutine e della dieta gluten free. Alimenti garantiti senza glutine per la dieta di noi celiaci. Esclusivamente prodotti del prontuario AIC, certificati, notificati o garantiti. Prodotti freschi e artigianali o confezionati. Vendita online di alimenti dietetici e spedizione in tutta Italia. Servizio catering senza glutine. Perché siamo intolleranti al glutine ma tolleriamo il gusto. Anzi, lo amiamo!"
    	    ]
    	);
    }
}
