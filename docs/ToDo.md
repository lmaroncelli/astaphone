Quello che sto cercando di fare è "ricostruire il sito" con tecnolgie più nuove e più robuste. Sto implementando un piccolo CMS con   Laravel 5.3 - quello che è attualmente il framework de facto dei programmatori PHP.
Questo credo sia la base necessaria ma non sufficiente per implementare poi le funzionalità che hai richiesto (tour virtaule, upload dei video, integrazione "avanzata" con Facebbok).

In questo nuovo sito ci saranno le pagine listing dei prodotti ? 

In particolare i link in alto verranno mantenuti (non parlo di grafica, parlo di funzionalità di filtro di prodotti in base alle categorie)

I filtri per caratteristiche ci saranno ?

Il discorso delle ricette verrà mantenuto ?

I commenti nella scheda prodotto ?





#Pagine Listing

Le pagine di listing dei prodotti per categoria si possono fare in 2 modi, in entrambi passo dalla route delle pagine

1. prima di cercare tra le pagine verifico se lo slug è lo slug di una categoria e se lo è creo con un template l'elenco dei prodotti di quella categoria (la cosa è poco flessibile, non creo una pagina, e se voglio aggiungere del contenuto devo modificare il template via codice)

2. possibilità di costruire delle pagine listing in cui specifico il filtro categoria e la seleziono; in questo caso il contenuto della pagina è sempre editabile e per ogni listing posso aggiungre il contenuto che voglio

------------------------------------------------------------------------------------------------------

|_| listing attivo

categoria	<select_categorie>

caratteristiche 

|_| caratteritisca 1			|_|  caratteritisca 2			|_|  caratteritisca 3

|_| caratteritisca 4			|_|  caratteritisca 5			|_|  caratteritisca 6 




nel controller avrò della pagina avrò una funzione che, se attivo il listing, mi trova i prodotti

$protti = Protto
			->attivo()
            ->listingCategorie($pagina->listing_categorie) // una lista di id 
			->listingCaratteristiche($pagina->listing_caratteristiche)
      
Dove questi query scope sono definiti sulla model prodotto tipo

 public function scopeListingCategorie($query, $categorie)
    {
    if(!$categorie)
      return $query;
	
	// qui devo prendere i prodotti che hanno ALMENO tutte le categorie elencate in $categorie
    // più semplicemente trovo gli id dei prodotti che che hanno ALMENO tutte le categorie elencate in $categorie
    // e poi faccio una query whereIn

    if(strpos($categorie, ",") !== false)
      return $query->whereIn("categoria_id", explode(",", $categorie));
    else
      return $query->where("categoria_id", $categorie);
    }


La stessa cosa farò per le caratteristiche






========================================================
===================== DA FINIRE ========================
========================================================


1. mettere i campi SEO per title, keyword, description in tutti i form (@include seo_fields ???)
2. manca scheda Prodotto e scheda Ricetta
Pagamento con Contrassegno
Si definisce contrassegno il pagamento effettuato direttamente allo spedizioniere che ti consegna la tua spesa. All’arrivo del corriere espresso prepara quindi la cifra esatta in contanti.
Poi firmerai a lui il modulo di ricezione del pacco. Dopo aver cliccato sul tasto “acquista” troverai una pagina riassuntiva del tuo ordine. Inoltre ne riceverai una copia via mail.
Il giorno in cui partirà la spedizione ti contatteremo telefonicamente per avvisarti dell’avvenuta spedizione.
Il pagamento in contrassegno prevede un costo aggiuntivo a quello di spedizione: 6 euro iva inclusa. È esattamente il costo che Celiachiamo sostiene per il servizio che lo spedizioniere fornisce (ritiro del denaro presso di te e accredito dello stesso sul nostro conto corrente bancario).
3. mettere gli indici in tutte le foreignkey
  table->integer('tag_id')->unsigned()->index();
4. nelle tabelle del blog NON CI SONO le foreignKey onDelete('cascade') !!!
5. le immagini in upload devono essere ridimensionate con intervention image che è già installato (adesso carica immagine di 2000 X 2500 di 1,5 MB)




========================================================
======================== ACL  ==========================
========================================================

`role` ENUM('admin','operatore','commerciale','hotel') NOT NULL COLLATE 'utf8_unicode_ci',




Class User


public function hasRole($roles)
    {

    if(is_array($roles))
      $roles_arr = $roles;
    else
      $roles_arr = [$roles];

    foreach($roles_arr as $role_neded)
      {
      if(strtolower($role_neded) === strtolower($this->role))
        return true;
      }

    return false;
    }


// middleware query 

 public function terminate($request, $response) 
    {
    
      //retrieve all executed queries
     
      if (in_array($request->ip(),\Utility::validIP())) {
        
        $queries = DB::getQueryLog();
        echo '<pre style="display:none;">';
          print_r($queries);
      echo "</pre>";
      
      }
    }
  }






  se un elemento lo identifico come

<span data-id="{{$id}}" class="delete_page">

jQuery(".delete_page").click(function(e){
      e.preventDefault();
        var id = jQuery(this).data('id');
       jQuery.post(
              baseUrl+"/admin/menu-categorie-pagine/del_page_menu", 
              id:id
        }).done(function(data){
          // nothing
        });



//helper class


in appa creo al direcrory libs e qui creo la classe, che restituisce degli output differenti in base al valore della dispo del prodotto
(lo potrei usare per visualizzare il prezzo offerta barrato ??)




<?php

class Availability {

  public static function display($availability) {
    if ($availability == 0) {
      echo "Out of Stock";
    } else if ($availability == 1) {
      echo "In Stock";
    }
  }

  public static function displayClass($availability) {
    if ($availability == 0) {
      echo "outofstock";
    } else if ($availability == 1) {
      echo "instock";
    }
  }
}




A questo punto Laravel deve fare un autoload di questa classe per poterla usare nelle nostre viste !!!!!


  
Custom Classes in Laravel 5, the Easy Way

This answer is applicable to general custom classes within Laravel. For a more Blade-specific answer, see Custom Blade Directives in Laravel 5.

Step 1: Create your Helpers (or other custom class) file and give it a matching namespace. Write your class and method:

<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }
}
Step 2: Create an alias:

<?php // Code within config/app.php

    'aliases' => [
     ...
        'Helper' => 'App\Helpers\Helper::class',
     ...
Step 3: Use it in your Blade template:

<!-- Code within resources/views/template.blade.php -->

{!! Helper::shout('this is how to use autoloading correctly!!') !!}



=================================================================================
DROPZONE UPLOAD IMAGE
=================================================================================


  public function uploadImage(Request $request)
  {

    $hotel_id = $this->getHotelId();
    $cliente = Hotel::find($hotel_id);
    
    $this->removeCache();
    $immagine = $this->_getResizedImages($cliente, $request);

    if (is_array($immagine)) {
      $error_msg = $immagine['msg'];
      return response()->json($error_msg, 400);
    }
    else {
      DB::transaction(function() use ($hotel_id, $immagine)
        {
          $pos = ImmagineGallery::where('hotel_id', $hotel_id)->max('position');

          if (is_null($pos)) {
            $pos = 0;
            $listing = 1;
          } else {
            $listing = 0;
          }

          $pos++;

          ImmagineGallery::create(['hotel_id' => $hotel_id, 'foto' => $immagine, 'position' => $pos, 'listing_app' => $listing]);

        });

      return response()->json('OK', 200);
    }



  }




  =================================================================================
  =================================================================================
  =================================================================================

scrivo i risultati con i valori negli attributi data  e con la stessa classe

<div class="risultati_ricerca">
  <article data-id="593" data-url="/hotel/beach-hotel-apollo/" data-categoria="4" data-prezzo="54.00" data-lat="44.291372" data-lon="12.348535" class="draw_item_cliente_vetrina_listing blocco-listing blocco-listing-item-2  vetrina  ">
    
  </article>
  <article data-id="736" data-url="/hotel/club-family-hotel-ariston/" data-categoria="4" data-prezzo="69.00" data-lat="44.276225" data-lon="12.352693" class="draw_item_cliente_vetrina_listing blocco-listing blocco-listing-item-2  vetrina  "> 

  </article>

  <article data-id="635" data-url="/hotel/club-family-hotel-rio/" data-categoria="4" data-prezzo="69.00" data-lat="44.275895" data-lon="12.351809" class="draw_item_cliente_vetrina_listing blocco-listing blocco-listing-item-2  vetrina  "> 
  
  </article>
</div>




con una funzione js leggo tutti gli elementi looppando sulla classe

$(function() {  
  
  var array_blocco_listing = [];
  
  // Utility
  
  function elementi () {
          
      $(".blocco-listing").each(function (i) {
        
        var object_item = {
        
          nome    : $(this).find(".blocco-listing-title").text(),
          qualita   : $(this).data("categoria"),
          prezzo    : $(this).data("prezzo"),
          oggetto   : $(this)
          
        };
        
        array_blocco_listing.push(object_item);
        
      });
      
    
    return array_blocco_listing;
    
  }





// Ordinamento
    
    $("#order").change( function () {
      
      var order = $("#order").val();
      var lista_elementi = elementi();
      
      window.addLoadingPage();
      
      if (order == "nome") {
      
        lista_elementi.sort(function(a, b){
          
            if(a.nome < b.nome) return -1;
            if(a.nome > b.nome) return 1;
            return 0;
            
        })
        
      } else if ( order == 'categoria_desc') {
        
        lista_elementi.sort(function(a, b){
          
            if(a.qualita < b.qualita) return -1;
            if(a.qualita > b.qualita) return 1;
            return 0;
            
        });
        
      } else if ( order == 'prezzo_min') {
        
        lista_elementi.sort(function(a, b){
          
            if(a.prezzo < b.prezzo) return -1;
            if(a.prezzo > b.prezzo) return 1;
            return 0;
        });
        
      }
      
      $(".risultati_ricerca").empty();
      
      $.each(lista_elementi, function (i, val) {
        
        $(".risultati_ricerca").append( $(val.oggetto) ); 
        
      });
      
      assegnaClick();
      window.removeLoadingPage();
      
    });


    $("#apertura").change( function () {
      
      $(".risultati_ricerca .no_risultati_ricerca").remove();
      
      var apertura = $("#apertura").val();
      var count = $(".blocco-listing").length;
      var c = 0;
      
      window.addLoadingPage();
            
      if (apertura == "0") {
        
        $(".blocco-listing").show();
        c = count;
          
      } else if (apertura == "annuale") {
                
        $(".blocco-listing").each(function (i) {
          
          var me = $(this);
          
          if (me.data("annuale") == 1) {
            me.show(); c++;
          } else {
            me.hide();
          }
          
        });
        
      } else if ( apertura == "aperto_capodanno") {
        
        $(".blocco-listing").each(function (i) {
          
          var me = $(this);
          
          if (me.data("capodanno") == 1) {
            me.show(); c++;
          } else {
            me.hide();
          }

          
        });
        
      } else if ( apertura =="aperto_pasqua") {
        
        $(".blocco-listing").each(function (i) {
          
          var me = $(this);
          
          if (me.data("pasqua") == 1) {
            me.show(); c++;
          } else{
            me.hide();
          }
          
        });
        
      }
      
      console.log(c);
      
      if (c == 0)
        $(".risultati_ricerca").append( $($nessun_hotel) );
      
      window.removeLoadingPage();
      
    });












=============================================================================

Allora:
l'unico filtro che voglio rimanga è "senza lattosio" [OK]

le ricette voglio mantenerle, ma voglio semplificarle, ossia non collegarci nessun prodotto, non ho bisogno di segnalare il grado di difficoltà, ecc ecc. Non mi interessano i filtri "senza questo, senza quello" nelle ricette. [OK]

Sostanzialmente voglio che diventino semplicemente un elenco di antipasti, pane&pizza, primi piatti e così via [OK]

Non mi interessa mantenere gli attuali commenti nè in relazione agli attuali prodotti nè in relazione alle attuali ricette. Se è un problema inserire i commenti nei prodotti e nelle ricette non si tratta di una funzionalità fondamentale, ne faccio tranquillamente a meno. Se si possono mettere commenti che appaiono solamente previa mia approvazione bene, altrimenti bene uguale e avanti senza commenti.

Non ho capito cosa intendi quando mi chiedi se voglio mantenere pagine listing dei prodotti.
E' normale che voglia mantenere una lista di prodotti quando si clicca sulla macrocategoria "farina" o "dolci&biscotti" (solo per fare due esempi), ma non credo sia quello che mi chiedevi.
Dell'attuale sito mi interessa mantenere per motivi SEO solamente alcune url. Relativamente a queste url non farò infatti neanche grandi modifiche sui testi presenti.

In generale quindi l'url rewriting è fondamentale, soprattutto per non perdere il traffico attuale.
Relativamente alla direzione di sviluppo io creerei un sito parallelo, in una cartella schermata con noindex e nofollow, e lavorerei lì sopra.

Cmq il 19 ed il 20 Novembre sono a Rimini per una fiera, se vuoi mi vesto da Wanda Nara e ci incontriamo...




===============================================================================================================

Pagamento con Contrassegno
Si definisce contrassegno il pagamento effettuato direttamente allo spedizioniere che ti consegna la tua spesa. All’arrivo del corriere espresso prepara quindi la cifra esatta in contanti.
Poi firmerai a lui il modulo di ricezione del pacco. Dopo aver cliccato sul tasto “acquista” troverai una pagina riassuntiva del tuo ordine. Inoltre ne riceverai una copia via mail.
Il giorno in cui partirà la spedizione ti contatteremo telefonicamente per avvisarti dell’avvenuta spedizione.
Il pagamento in contrassegno prevede un costo aggiuntivo a quello di spedizione: 6 euro iva inclusa. È esattamente il costo che Celiachiamo sostiene per il servizio che lo spedizioniere fornisce (ritiro del denaro presso di te e accredito dello stesso sul nostro conto corrente bancario).


Pagamento con Bonifico
Scegliendo questa modalità di pagamento una volta cliccato sul tasto “acquista” troverai una pagina riassuntiva con già precompilati i nostri dati bancari. Potrai stamparla e consegnarla allo sportello della tua banca oppure effettuare personalmente il bonifico se disponi di un conto on line. Riceverai anche via mail la stessa pagina informativa.

Ti chiediamo di indicare come valuta beneficiario la stessa data del giorno in cui effettui il bonifico, in modo da velocizzare la spedizione della tua spesa.


Carta di credito via FAX
Scegliendo questa modalità di pagamento una volta cliccato sul tasto “acquista” troverai una pagina riassuntiva del tuo ordine. Te ne sarà inoltre inviata una copia via e-mail. Stampala e compila i campi relativi alla tua carta di credito. Inviaci poi via fax al numero 06/62277277 la pagina compilata.
Noi effettueremo su connessione sicura con la banca la transazione e ti avviseremo tramite sms (o tramite telefono se ci fornisci un recapito fisso) una volta completato il processo.
Ti garantiamo l’immediata distruzione dei tuoi dati una volta completata la transazione.


Pagamento con Carta di Credito via Numero Verde
Se vuoi puoi contattarci tramite il nostro numero verde 800128020 e completare il processo di acquisto tramite carta di credito con un nostro operatore.
Dopo aver cliccato sul tasto “acquista” troverai una pagina riassuntiva del tuo ordine e le istruzioni su quali dati comunicare al nostro operatore.
Per farci visualizzare il tuo ordine è indispensabile che tu compili i dati di spedizione (e di fatturazione se necessiti di fattura). Cliccando sul tasto “acquista” riceverai anche una e-mail riassuntiva del tuo acquisto, in modo che potrai chiamare il nostro numero verde quando ti è più comodo.
Ti garantiamo che non registreremo in alcun modo i dati della tua carta di credito. La transazione avverrà su connessione sicura con la banca mentre siamo al telefono con te.