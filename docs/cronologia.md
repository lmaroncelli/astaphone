
**11/12/16** Homepage

La homepage è un insieme di elementi che vanno costruiti (slide header, slide freschi, slide confezionati, negozi,...)
ci sarà una pagina di amministrazione per gestire questi widget della home.


**03/01/17** Widget


==========================================================
il widget "slide prodotti" avrà:

- nome (es: "widget prodotti confezionati Magliana")

PARTE 1
- slide con immagini (come home page)

PARTE 2
- titolo
- descrizione
- link alla pagina statica (link pulsante visualizza)
- link al video (facoltativo)

ci dovrà essere un modo per scegliere se ci sono prima (a sx) le slide o la descrizione

==========================================================
lo slide "i confezionati Tiburtina" avrà:

- titolo
- slide con immagini (5 alla volta)




==========================================================
lo slide "header" avrà:

- titolo
- slide header come homepage


==========================================================
"mappa": NO QUESTO NON SARA' UN WIDGET MA I CAMPI SARANNO IN TUTTE LE PAGINE ??

- nome (Celiachiamo Lab)
- indirizzo (Via della Magliana 183)
- lat (14.032233)
- long (7.09324234)


Chiave	
AIzaSyDqImK9lRFJdcFLSt0W-t_QQC70fCsCwV0
Tipo	
Nessuna
Data di creazione	
20 dic 2013, 12:22:41


==========================================================
la slide "categorie prodotti" NON SARA' ASSOCIATA AD UN WIDGET, ma come per la slide header, sarà associata direttamente alla pagina !!

questa slide permetterà prima di caricare le slide ognuna con un tab come per il 3 cols widget;
poi per ogni immagine oltre alla 
- descrizione
ci sarà un campo per
- url della pagina di destinazione 
e 
- la categoria prodotto di riferimento

tblSlideCategorieProdotti(id, titolo)

tblImmaginiSlideCategorieProdotti(id, slide_id, nome, descrizione, url-pagina,categoria_id)




==========================================================
il widget "ThreeColumnsWidget" avrà:

- nome
- img_1
- titolo_1
- descrizione_1
- link_1 alla pagina statica (link pulsante visualizza)
- img_2
- titolo_2
- descrizione_2
- link_2
- img_3
- titolo_3
- descrizione_3
- link_3



cioè  un tab con 3 elementi dove per ognuno ci può essere foto e descrizione

serve per HOMEPAGE e SERVIZI MAGLIANA (catering servizi a domicilio, corsi)










**05/01/17** Pagine Negozi


===================================================================
Magliana

1. slide 'header'

2. descrizione

3. widget 'elenco elementi'

4. widget 'slide prodotti'

5. widget 'mappa'

6. listing prodotti

7. widget 'gallery categorie prodotti' 

8. link al virtual tour creato dal fotografo

**gli altri negozi avranno questi campi OPPURE MENO**



**08/01/17** Relazione one-one Widget--Slide

se WIDGET hasOne SLIDE allora devo mettere widget_id nella tabella della slide
SICCOME ho già messo la FK slide_id nella tabella dei widget, ALLORA giro la relazione e dico 

SLIDE hasOne WIDGET (è sempre 1 a 1, ma in questo modo la slide_id va nella tabella widget)






**23/02/2017** stampa mappa

I tried this script. On my page with the map : 


<div class="mappa_percorso">


	<div id="map"></div>
	
	<div class="percorso">
	
		{!!Form::open()!!}
			
			<img src="{{asset("images/direzioni.png")}}" style="vertical-align:middle; padding:5px;" />
			{!! Form::text('indirizzo',null,["placeholder" => "ES: via Gambalunga, 81 Rimini", "id" => "indirizzo"]) !!}
			{!! Form::submit('&#8594;',["id" => "show_directions"]) !!}
			
		{!!Form::close()!!}
		
		<em class="note">{{ trans('hotel.vedi_percoso_indicazioni') }}</em>
		
	</div>
	
	<div id="directions"></div>


	<a href="#" onclick="window.open ('print_map.html')">print map</a> 
	<a href="#" onclick="window.open ('print_directions.html')">print directions</a> 
	
</div>


<script language="javascript"> 
var directions = window.opener.document.getElementById("directions"); 
document.write(directions.innerHTML); 



window.print(); 
</script> 





<script language="javascript"> 
var map = window.opener.document.getElementById("map"); 
document.write(map.innerHTML); 



window.print(); 
</script> 







<code>

<a href="#" onclick="window.open ('print.html')">print</a> 

and in the print.html page : 

<script language="javascript"> 
var map = window.opener.document.getElementById("map_canvas"); 
document.write(map.innerHTML); 
window.print(); 
</script> 

</code>

It works with IE8 and Opera. But with FF, it only prints the Scalebar, 
the TypeControlbar and the NavigationControl Bar. 




http://stackoverflow.com/questions/29585758/google-map-image-with-directions-route-print



#map-canvas {
  margin: 0;
  padding: 0;
  width: 1000px;
  height: 500px;
  /*ensure that the map is also visible when printing*/
  display: block !important;
}
@media print {
  /* hide anything */
  body>* {
    display: none;
  }
}

<html>

<head>
  <script src="http://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
</head>

<body>

  <input type="button" value="Print Div" onclick="window.print()" />
  <div id="map-canvas"></div>
</body>

</html>





18/03/17



tblPages
=======================

`seo_title` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`seo_description` TEXT NULL COLLATE 'utf8_unicode_ci',
`title` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
`uri` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
`inMenu` TINYINT(1) NOT NULL DEFAULT '0',
`padre_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',
`content` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
`listing` TINYINT(1) NOT NULL DEFAULT '0',
`listingCategorie` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
`listingCaratteristiche` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
`listingCategorieRicette` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
`header_slide_id` INT(10) UNSIGNED NULL DEFAULT NULL,
`categorie_prodotti_slide_id` INT(10) UNSIGNED NULL DEFAULT NULL,
`prodotti_freschi_widget_id` INT(10) UNSIGNED NULL DEFAULT NULL,
`prodotti_confezionati_widget_id` INT(10) UNSIGNED NULL DEFAULT NULL,
`three_columns_widget_id` INT(10) UNSIGNED NULL DEFAULT NULL,
`gm_nome` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_indirizzo` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_lat` VARCHAR(20) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_long` VARCHAR(20) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci'


===========================================================================================================================================================================
===========================================================================================================================================================================


tblHomePages
==========================

`seo_title` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
`seo_description` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
`content` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
`listing` TINYINT(1) NOT NULL DEFAULT '0',
`listingCategorie` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
`listingCaratteristiche` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',


`header_slide_id` INT(10) UNSIGNED NOT NULL,
`prodotti_freschi_slide_id` INT(10) UNSIGNED NULL DEFAULT NULL,
`prodotti_confezionati_slide_id` INT(10) UNSIGNED NULL DEFAULT NULL,
`footer_slide_id` INT(10) UNSIGNED NULL DEFAULT NULL,
`img_magliana` VARCHAR(255) NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`desc_magliana` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
`img_cipro` VARCHAR(255) NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`desc_cipro` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
`img_tiburtina` VARCHAR(255) NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`desc_tiburtina` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
`gm_nome` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_indirizzo` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_lat` VARCHAR(20) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_long` VARCHAR(20) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_info` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_info_img` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_icon` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_lat2` VARCHAR(20) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_long2` VARCHAR(20) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_info2` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_info2_img` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_icon2` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_lat3` VARCHAR(20) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_long3` VARCHAR(20) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_info3` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_info3_img` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci',
`gm_icon3` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8_unicode_ci'




La tblPages deve avere anche tutti i cmpi della tblHomePages
NOOOOO


La tblHomePages la rinomino in tblCustomPages

e gli aggiungo i campi 

`title` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
`uri` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
`inMenu` TINYINT(1) NOT NULL DEFAULT '0',
`padre_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',


in questo modo tutte le pagine PRIMA le cerco in custompages in base all'URI


APPLICO GITFLOW e creo la feature custom_pages


- ho lanciato la migrazione che rinomina la tabella e le FK

- cerco nel codice tblHomePages: a parte nelle migrazioni (che rimane così) il nome va cambiato in /app/HomePage.php e HomePageController.php

- cerco nel codice HomePage e lo sostituisco con CustomPage

- rinomino il file /app/HomePage.php in /app/CustomPage.php



