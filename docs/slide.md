- la slide header dovrà avere immagini 
"1300 X 500" 
ed andranno uploadate in 
"frontend/assets/img/slide/"


siccome il container al massimo è 1170px allora le immagini dell'header verranno ridimensionate a questo width con intervention image.


================================================================================================
================================================================================================

- le slide dei prodotti freschi e confezionati dovranno avere immagini
"590 X 462"
ed andranno uploadate in 
"frontend/assets/img/bxslider/"


- i negozi dovranno avere immagini
"400 X 300"
ed andranno uploadate in 
"frontend/assets/img/"


- le slide delle categorie di prodotti hanno immagini

800x504


DOMANDE
===========


che rapporto c'è tra i negozi (magliana, Cipro, Tiburtina) ed i prodotti frschi e confezionati ?

> *Magliana* è un negozio che vende prodotti confezionati ed ha annesso un laboratorio che realizza prodotti freschi.
E' il locale Celiachiamo più bello, e quello a cui vorrei dare maggiore visibilità.

> *Cipro* è un negozio che vende prodotti confezionati ed in cui portiamo dal locale di Magliana alcuni prodotti freschi, quelli trasportabili: pane, dolcetti, biscotteria, tortine

> *Tiburtina* è un negozio come Magliana ma in versione mignon: c'è un laboratorio di produzione ed un piccolo spazio dedicato ai prodotti confezionati





le categorie di prodotti (pane e pizza, dolci, farine, freschi e artigianali, pasta e riso) come si relazionano tra freschi e confezionati ?


> Quelle (Fresci e artigianali ) sono le categorie dell'ecommerce.
In __"Freschi & Artigianali"** ci saranno solo i nostri ***prodotti che decideremo di proporre in vendita sul sito___

> Magliana realizza un saaaacco di prodotti, ma sul sito, nella sezione ecommerce, metteremo solo quelli che riusciamo a spedire.
Il pane fresco o la pizza al taglio ad esempio non li spediamo. Gli occhi di bue od i biscotti invece riusciamo a spedirli.
Se ad esempio venderemo un nostro pacchetto di occhi di bue, questo dovrà essere presente nella categoria "freschi e artigianali" e anche nella categoria "dolci e biscotti". In quest'ultimo caso insieme agli altri dolci e biscotti confezionati (e industriali).
***Praticamente in freschi e artigianali ci sono solo i nostri prodotti, che però si replicano anche nelle altre categorie di appartenenza.***


Nella scheda prodotto se c'è il check su "Freschi e artigianali" vule dire che quel prodotto può essere nell'ecommerce del sito: poi quando creo la pagina vado a selezionare quali prodotti far vedere in quella pagina




i corsi sono delle entità da mettere in relazione con i negozi ? (cioè è possibile creare un nuovo corso con desc e video ed associalo ad un negozio ? relazione 1 - n ?)

> Quella dei corsi è semplicemente una categoria informativa di uno dei servizi che facciamo.
__Non ho interesse a creare nuovi corsi da associare ai singoli negozi.__
Voglio solo dare l'informazione sull'organizzazione dei corsi nelle pagine dei negozi che li organizzano (Cipro e Magliana).
Ho un video relativo ai corsi, ed al massimo sono interessato ad un gallery in cui una volta ogni tanto andrò a caricare nuove foto fatte ai nuovi corsi, ma come ripeto non ho interesse a farla diventare una sezione in continua implementazione.



i prodotti da acquistare in ogni pagina negozio come sono scelti, c'è una relazione tra negozio e prodotti ?
Oppure tutti vendono tutti ? Quindi in ogni pagina di negozio con che criterio scelgo i prodotti da mettere per la vendita ? n a caso ?


> E' più semplice di quanto pensi:

> 1. __Nella pagina relativa al negozio di Cipro__, il rimando ai prodotti da acquistare deve essere relativo ai prodotti confezionati e freschi (le spedizioni partono da Cipro): quindi ci potrà essere un nostro biscotto, poi un pane confezionato, poi una pizza sotto vuoto, poi ancora il nostro pangrattato, un panino confezionato, ecc ecc.
__Un rimando quindi all'ecommerce generale__.
Magari fai in modo che io possa scegliere i prodotti da visualizzare per primi nella barra che scorre lenta per invitare l'utente al click (che so, i primi 10), il resto se li pescasse a cazzo il sistema, a me andrà bene.

> 2. __Nella pagina relativa al negozio di Magliana__ la visualizzazione e quindi l'invito all'acquisto vorrei fosse relativo ai soli __prodotti freschi__ che i clienti potranno ricevere a domicilio.
Fino a quando non sarà attivo il servizio di consegne a domicilio andrà bene la stessa visualizzazione del negozio di Cipro.

> 3. __Nella pagina relativa al negozio di tiburtina__ i prodotti da visualizzare saranno quelli relativi alle __consegne a domicilio__, che Tiburtina ha invece già attive.






le 3 pagine dei negozi hanno lievi differenze (es Tiburtina non ha né foto né video né corsi e la slide fatta diversa): sono cmq da considerare 3 template uguali (posso voler mettere in qualunque negozio corsi, slide,foto) oppure solo le prime due sono "uguali" ed invece Tiburtina è completamente separata ?


> La gallery dei freschi di Tiburtina è tecnicamente uguale a quella dei freschi di Magliana. Come è ovvio le foto saranno diverse.
Credo sia più comodo fare 3 template uguali, ma decidi tu.
Se su Tiburtina trovi meno cose è perchè è il negozio più piccolo e meno importante, ecco perchè non ha i corsi e non ha una gallery grande per i confezionati. Hanno la gallery dei freschi perchè è il 90% della loro attività produrre fresco.
Ha però una gallery dei confezionati del tutto identica a quella che permette di visualizzare i freschi di magliana o i prodotti ecommerce che si vedono nella parte di Cipro.
Con la grafica abbiamo pensato di non dare tanto spazio ai confezionati di Tiburtina perchè in effetti il negozio è piccino quindi non volevamo prendere in giro l'utente ingolosendolo con chissà quante immagini e poi deluderlo una volta che si reca in loco e vede che gli scaffali del confezionato sono solo 7 o 8.
Tiburtina punta tanto sulle consegne a domicilio, quindi abbiamo pensato ad un sistema che, una volta inserita la vita, dice all'utente se è possibile che la sua zona sia raggiunta in forma diretta dai ragazzetti del forno oppure da moovenda (un food delivery). Nella grafica c'è un errore, non voglio dare visibilità a Just Eat. Al posto del logo Just Eat ci sarà il logo delle consegne a domicilio di tiburtina.


HOME:

La homepage è un insieme di elementi che vanno costruiti (slide header, slide freschi, slide confezionati, negozi,...)
ci sarà una pagina di amministrazione per gestire questi widget della home.

> ok

Ogni NEGOZIO ha:



__MAGLIANA__:

- video (pensavo ad un loop di un girato di qualche nostro prodotto fresco, tipo quello che comprare quando vai su https://www.homeaway.it/ ma solo nella striscia che ti ha segnalato la grafica)

- descrizione yesssss

 immagine del pane con i prodotti ?? OPPURE COSA ??? 

 > Subito sotto la scritta Freschi trovi tanti quadratini con scritto PANE PIZZA PIATTI PRONTI DOLCI E BISCOTTI ecc ecc. Vedi?
Ecco, un po' come a grandi linee la gallery qui http://www.qooqee.com/templates/aroma/ vorrei che ci fosse la fotina piccola ad identificare la categoria (pane pizza piatti pronti ecc ecc), la stessa foto grande, sulla destra l'inizio di un testo esplicativo e per l'utente la possibilità di cliccare per approfondire la categoria di prodotto di cui stiamo parlando.

Se ad esempio clicca sul quadratino piccolo con scritto fritti, si visualizzerà la fotina piccola ben più grande nel riquadro sotto, a destra della foto ci sarà l'inizio della descrizione dei nostri fritti, e se l'utente clicca (sulla foto grande o sul testo a destra della stessa) andrà nella pagina statica dedicata ai fritti.
Vorrei questo per ogni categoria della gallery (in totale sono 6 categorie).
Cosa visualizza l'utente quando clicca?
Quello che vedi in "wireframe pagina statica", uno degli screen presenti su invision.


- elenco di attività (catering, consegne a domicilio, corsi) Che rimanderanno sempre all'approfondimento in pagina statica dedicata

- Hai dimenticato il Virtual Tour, che in ogni caso ci darà il fotografo
- slide di prodotti (con metà desc + video) yesssssssss
- elenco di prodotti da acquistare Ripeto, siamo su Magliana, quindi qui vanno i freschi che consegnamo a domicilio (fino a quando non sarà attiva per Magliana la consegna a domicilio metteremo i prodotti dell'ecommerce, gli stessi della pagina di Cipro)
- mappa yesssss



CIPRO

- foto Magari sempre una slideshow di foto
- descrizione yesssss
- slide di prodotti confezionati (con metà desc + video) se guardi c'è scritto visualizza, ossia daremo all'utente la possibilità di cliccare ed arrivare sempre in una pagina statica di approfondimento
- slide di prodotti freschi (con metà desc + video) se guardi c'è scritto visualizza, ossia daremo all'utente la possibilità di cliccare ed arrivare sempre in una pagina statica di approfondimento
- corsi (descrizione + video)
- elenco di prodotti da acquistare come già detto saranno tutti quelli dell'ecommerce, quindi sia i confezionati che i freschi di nostra realizzazione e che riusciamo a spedire
- mappa yessssss


TIBURTINA

- descrizione
- immagine del pane con i prodotti ?? OPPURE COSA ??? Come Magliana

Hai dimenticato le consegne a domicilio.
Come copio da sopra, Tiburtina punta tanto sulle consegne a domicilio, quindi abbiamo pensato ad un sistema che, una volta inserita la vita, dice all'utente se è possibile che la sua zona sia raggiunta in forma diretta dai ragazzetti del forno oppure da moovenda (un food delivery). Nella grafica c'è un errore, non voglio dare visibilità a Just Eat. Al posto del logo Just Eat ci sarà il logo delle consegne a domicilio di tiburtina.

- slide di prodotti confezionati con descrizione sopra (slide di 5 immagini alla volta) La descrizione sarà una descrizione generica, ossia di tutti i prodotti. Una cosa del tipo: "Un assortimento dei principali prodotti delle case senza glutine più importanti". Esatto, 5 immagini per volta, se vai sopra o se clicchi sull'immagine si ingrandisce di un po'
- facebook fan page yessssss
- mappa yesssssss



PAGINA STATICA PANE Il Wireframe pagina statica è una delle pagine statiche di approfondimento dei freschi. Sulla pagina di Magliana e su quella di Tiburtina c'è la gallery con i prodotti freschi, la foto piccola della categoria e la foto più grande con a fianco l'inizio della descrizione di approfondimento.
Ecco questa è la pagina in cui il cliente deve andare se vuole approfondire la sezione, quindi se clicca sulla foto grande o sulla descrizione sulla destra.

- video
- desc
- slide
- desc con foto La slideshow non è seguita da un'ulteriore sezione descrittiva. Mi basta, dopo la descrizione testuale, avere una slideshow in cui far vedere in immagini quello che ho scritto poco prima: ad esempio ci sarà una foto delle rosette con scritto "Le nostre rosette senza glutine", poi una di ciabattine, una di pagnottelle, ecc ecc
- gallery come detto sopra, mi bassta la slideshow
- mappa prima della mappa con Elisabetta abbiamo pensato di mettere il rimando alle consegne a domicilio. Fino a quando non saranno attive questa sezione può essere mantenuta inattiva


PAGINA PRODOTTI FRESCHI è la pagina a cui si arriva se dalla home l'utente clicca su prodotti freschi

- video yessss
- descrizione yesssss
- foto + logo + descrizione MAGLIANA yesssss (al click porterà alla sezione specifica di Magliana)
- foto + logo + descrizione TIBURTINA yesssss (al click porterà alla sezione specifica di Tiburtina)
- slide di prodotti freschi (con metà desc + video) qui in realtà mi piacerebbe una sorta di mosaico, in cui le immaginine delle foto chiaramente sono ferme, ma le immaginine dei video prevedono che il video parta in automatico senza audio. Solo se l'utente ci clicca si ingrandisce e parte l'audio. Praticamente vorrei lo stesso effetto che ha facebook quando qualcuno carica un album di foto e video insieme. Quando lo condivide sulla bacheca si vede che si tratta sia di foto che di video perchè nel mini collage di preview facebook fa vedere anche la miniatura del video in loop 
- corsi (descrizione + video) yessssss
- mappa con i soli due negozi di Magliana e Tiburtina e l'itinerario per raggiungerci

le slide di prodotti freschi / confezionati cambiano per ogni pagina ? Sì perchè i prodotti freschi di magliana sono diversi da quelli di tiburtina, così come i prodotti freschi che portiamo a Cipro sono solo una selezione di tutti quelli che realizziamo a Magliana. Idem i confezionati di ogni negozio.

Queste sono le pagine elencate nei mockup e se volete creare una nuova pagina che tipo di pagina deve essere ? Queste sono quelle custom e tutte le altre si creano come hai visto l'altra volta nel cms ? Con WYSIWYG + altri campi + listing prodotti ? 

Nel mockup abbiamo messo le pagine più particolari. Quelle che mi hai fatto vedere tu (le WYSIWYG) possono andare bene per il blog e per la sezione "celiachia: cos'è?", una sezione che con la grafica non abbiamo approfondito perchè non mi frega molto di come verrà graficamente, trattandosi di landing pages in cui acchiapperò chi da motore di ricerca cerca informazioni sugli aspetti più disparati della celiachia. Quindi non volevo complicarti anche questa parte.
Se vai al mockup dell'home page noterai che in basso, prima della mappa, c'è la sezione "celiachia cos'è?".
Questa sezione andrà a replicare i contenuti che trovi su www.celiachiamo.com nelle 8 sezioni del menù blu sulla sinistra.

Ad oggi non mi viene in mente una nuova sezione che mi piacerebbe avere.
Credo che potrei magari avere bisogno di altri approfondimenti sui miei futuri prodotti e sui miei futuri servizi...che ne so, metti che vogliamo iniziare a servire negozi esterni ai punti vendita Celiachiamo...
Forse se mi preparassi un WYSIWYG del tutto simile al "wyreframe pagina statica" credo che staremmo a cavallo
















FAQ

1. i prodotti da creare sul sito dovranno avere un categoria (enum) freschi|confezionati e consegna a domicilio (boolean) in modo da poter selezionare i prodotti da visualizzare nei vari negozi

2. le 6 categorie di prodotto da visualizzare nella gallery di alcune pagine 
(... Vorrei questo per ogni categoria della gallery (in totale sono 6 categorie)) quali sono esattamente ?
Quelle del sito attuale ?

Attuali sono:

1. pane e pizza
2. dolci e biscotti
3. Freschi e artigianali
4. Farine
5. Pasta e riso
6. Area bimbi
7. Varie

e di queste "Freschi e artigianali" è una categoria che dice se il prodotto è vendibile online. (?)

 mentre tu dici e sul mockaup è scritto

 1 pane 
 2 pizza 
 3 piatti pronti 
 4 docli e biscotti
 5 fritti
 6 torte di compleanno


3. Si deve trovare una gallery per le categorie di prodotti con queste caratteristiche

> Ecco, un po' come a grandi linee la gallery qui http://www.qooqee.com/templates/aroma/ vorrei che ci fosse la fotina piccola ad identificare la categoria (pane pizza piatti pronti ecc ecc), la stessa foto grande, sulla destra l'inizio di un testo esplicativo e per l'utente la possibilità di cliccare per approfondire la categoria di prodotto di cui stiamo parlando.
Se ad esempio clicca sul quadratino piccolo con scritto fritti, si visualizzerà la fotina piccola ben più grande nel riquadro sotto, a destra della foto ci sarà l'inizio della descrizione dei nostri fritti, e se l'utente clicca (sulla foto grande o sul testo a destra della stessa) andrà nella pagina statica dedicata ai fritti.
Vorrei questo per ogni categoria della gallery (in totale sono 6 categorie).
Cosa visualizza l'utente quando clicca?
Quello che vedi in "wireframe pagina statica", uno degli screen presenti su invision.

simile alla gallery dei prodotti che mi hai descritto (foto piccola, foto grande, link alla pagina) ho trovato:

- http://jssor.com/demos/content-slider.slider


questa potrebbe andare secondo te?


4. nei mockaup, nei widget in cui da una parte c'è la slide di foto per i prodotti freschi o confezionati, dall'altra parta c'è titolo, descrizione, pulsante visualizza e "video": questo video deve essere messo embedded qui oppure è un link alla pagina statica di spiegazione (lo stesso link che c'è sul pulsante ...); quindi quelle 2 frecce saranno 2 immagini che mi passerà la grafica ? 