**homepage**

- viene caricato il video di presentazione come campo __url_video_presentazione__ aggiunto alla tabella *tblCustomPages*

- nello slide_header viene caricata l'immagine di header e come descrizione "il tuo riferimento tecnologico" ("a Rimini" è cablato nella pagina home)

- tra prodotti e categorie vi è una relazione molti a molti; le categorie (con gli eventuali prodotti assegnati) sono caricate in home page per la creazione della tab (a regime si caricheranno solo 3 prodotti (random ???) per ogni catgoria)

le categorie sono:

1. Mobile phone
2. Tablet
3. Computer
4. Notebook
5. I/O devices



- in home page dalle immagini dei prodotti in categoria tolgo il fasthover (adesso c'è solo un'immagine per ogni prodotto) commentando un pezzo di fasthover.css

 


 **Chi siamo**


 l'immagine di heder è la slide slide header "chi siamo"

 la slide a DX della descrizione è la "Slide Confezionati"


 
 **Contattaci**

  Installing the BotDetect Laravel Captcha Composer Package

  1. composer require captcha-com/laravel-captcha:"4.*" (in questo modo aggiungo nel composer il require per il captcha)

  2. registrare Laravel Captcha service provider (in config/app.php aggiungo la riga
  LaravelCaptcha\Providers\LaravelCaptchaServiceProvider::class,
  ai service providers) 

  3. pubblicare il captcha configuration file (The captcha.php file is already put in Laravel's config folder now.)



ATTENZIONE:

Siccome il package crea le url per gli assets (immagini e altro) del tipo

localhost/astaphone/public/captcha-handler?get=image&c=contactcaptcha&t=779dca6dca64b0596c2551e546d22a6b

queste vanno in conflitto con quelle per creare le pagine del sito che sono:

Route::get('/{slug}?', 'SiteController@make')


Quindi, per la mia route, definisco la regola che il prametro {slug} deve essere diverso da 'captcha-handler'; lo faccio in RouteServiceProvider

 public function boot()
    {
        Route::pattern('slug', '((?!captcha-handler).)+');

        parent::boot();
    }


 Inoltre definisco una route separata per la ome senza il parametro opzionale, cioè:

Route::get('/', 'SiteController@make');
Route::get('/{slug}', 'SiteController@make') 
