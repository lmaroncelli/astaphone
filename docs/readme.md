# To DO

-	form delle pagine con WYSIWYG scaricato con npm e gulp




**php artisan app:name Cms**


**authentication**

Want to get started fast? Just run 

php artisan make:auth 
and 
php artisan migrate

These two commands will take care of scaffolding your entire authentication system!


At its core, Laravel's authentication facilities are made up of "guards" and "providers

Guards define how users are authenticated for each request. 
For example, Laravel ships with a session guard which maintains state using session storage and cookies.


Providers define how users are retrieved from your persistent storage. Laravel ships with support for retrieving users using Eloquent and the database query builder. However, you are free to define additional providers as needed for your application.


**Admin**

Tutti i controller in admin estendono il controller AdminController che ha nel costruttore il middleware auth per autenticazione !!!





**package.json file**


installo node.js (che ha già una versione di npm)

aggiorno la versione di npm con 

sudo npm install npm -g

a questo punto installo le dipendenze lette dal package.json con 

npm install

questo crea la cartella node_modules con tutti i moduli e le dipendenze installati

Next, you'll need to pull in Gulp as a global NPM package:

sudo npm install --global gulp-cli


Once the dependencies have been installed using npm install, you can compile your SASS files to plain CSS using Gulp. 
The gulp command will process the instructions in your gulpfile.js file. Typically, your compiled CSS will be placed in the public/css directory:

luigi@lenovo /var/www/html/celiachiamo $ gulp
[16:43:59] Using gulpfile /var/www/html/celiachiamo/gulpfile.js
[16:43:59] Starting 'all'...
[16:43:59] Starting 'sass'...
[16:44:01] Finished 'sass' after 1.34 s
[16:44:01] Starting 'webpack'...
[16:44:04] 
[16:44:04] Finished 'webpack' after 3.72 s
[16:44:04] Finished 'all' after 5.06 s
[16:44:04] Starting 'default'...
┌───────────────┬───────────────────────────────┬────────────────────────────────┬────────────────────┐
│ Task          │ Summary                       │ Source Files                   │ Destination        │
├───────────────┼───────────────────────────────┼────────────────────────────────┼────────────────────┤
│ mix.sass()    │ 1. Compiling Sass             │ resources/assets/sass/app.scss │ public/css/app.css │
│               │ 2. Autoprefixing CSS          │                                │                    │
│               │ 3. Concatenating Files        │                                │                    │
│               │ 4. Writing Source Maps        │                                │                    │
│               │ 5. Saving to Destination      │                                │                    │
├───────────────┼───────────────────────────────┼────────────────────────────────┼────────────────────┤
│ mix.webpack() │ 1. Transforming ES2015 to ES5 │ resources/assets/js/app.js     │ public/js/app.js   │
│               │ 2. Writing Source Maps        │                                │                    │
│               │ 3. Saving to Destination      │                                │                    │
└───────────────┴───────────────────────────────┴────────────────────────────────┴────────────────────┘
[16:44:04] Finished 'default' after 6.33 ms

ATTENZIONE

http://localhost:8000/fonts/bootstrap/glyphicons-halflings-regular.woff2 Failed to load resource: the server responded with a status of 404 (Not Found)

non vedo le icone di bootstrap perché mancano dei font che vengono cercati in fonts/bootstrap

Quindi aggiungo con elixir il comando per copiare i font nella directory

.copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts');

rilancio gulp

gulp
[16:55:42] Using gulpfile /var/www/html/celiachiamo/gulpfile.js
[16:55:42] Starting 'all'...
[16:55:42] Starting 'sass'...
[16:55:43] Finished 'sass' after 1.22 s
[16:55:43] Starting 'webpack'...
[16:55:46] 
[16:55:47] Finished 'webpack' after 3.88 s
[16:55:47] Starting 'copy'...
[16:55:47] Finished 'copy' after 47 ms
[16:55:47] Finished 'all' after 5.15 s
[16:55:47] Starting 'default'...
┌───────────────┬───────────────────────────────┬───────────────────────────────────────────────┬────────────────────┐
│ Task          │ Summary                       │ Source Files                                  │ Destination        │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼────────────────────┤
│ mix.sass()    │ 1. Compiling Sass             │ resources/assets/sass/app.scss                │ public/css/app.css │
│               │ 2. Autoprefixing CSS          │                                               │                    │
│               │ 3. Concatenating Files        │                                               │                    │
│               │ 4. Writing Source Maps        │                                               │                    │
│               │ 5. Saving to Destination      │                                               │                    │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼────────────────────┤
│ mix.webpack() │ 1. Transforming ES2015 to ES5 │ resources/assets/js/app.js                    │ public/js/app.js   │
│               │ 2. Writing Source Maps        │                                               │                    │
│               │ 3. Saving to Destination      │                                               │                    │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/bootstrap-sass/assets/fonts/**/* │ public/fonts       │
└───────────────┴───────────────────────────────┴───────────────────────────────────────────────┴────────────────────┘
[16:55:47] Finished 'default' after 5.76 ms


**users management - CRUD**


Per il form non utilizzo il package esterno laravelcollective/html, ma rimango con form html ed utilizzo old()


> What everyone seems to be missing is that if you are not using the laravelcollective/html package you can easily do this by taking advantage of the fact that old() takes a default parameter.  value="{{ old('my-input', $default-my-input) }}"

> so:
value="{{ old('my-input',  isset($post->title) ? $post->title : null) }}" 


ATTENZIONE per i method diversi da POST/GET (PUT/PATCH/DELETE) utilizzare

{{ method_field('PUT') }}

> HTML forms do not support PUT, PATCH or DELETE actions. So, when defining PUT, PATCH or  DELETE routes that are called from an HTML form, you will need to add a hidden _method field to the form. The value sent with the _method field will be used as the HTTP request method:

<form action="/foo/bar" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
You may use the method_field helper to generate the _method input:

{{ method_field('PUT') }}






**compiling assets**




The gulpfile.js file in your project's root directory contains all of your Elixir tasks. 
Elixir tasks can be chained together to define exactly how your assets should be compiled.

CSS
- The sass method allows you to compile Sass into CSS.
- If you would just like to combine some plain CSS stylesheets into a single file, you may use the  styles method

JS
- The webpack method may be used to compile and bundle ECMAScript 2015 into plain JavaScript.
- If you have multiple JavaScript files that you would like to combine into a single file, you may use the scripts method, which provides automatic source maps, concatenation, and minification.


If you intend to concatenate multiple pre-minified vendor libraries, such as jQuery, instead consider using mix.combine(). This will combine the files, while omitting the source map and minification steps. As a result, compile times will drastically improve.


__
Voglio aggiungere jQuery: il file package.json contiene già di default jquery come dipendenza, quindi è già stato scaricato (con npm install)

=================================================================================================================================================================================
=================================================================================================================================================================================

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .combine(['public/js/app.js','node_modules/jquery/dist/jquery.min.js'],'public/js/app.js')
       .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts') ;
});

con webpack compilo il js e lo salvo in public/js/app.js
con combine concateno public/js/app.js + node_modules/jquery/dist/jquery.min.js in public/js/app.js 

 gulp
[07:40:01] Using gulpfile ~/Code/Laravel/public/cellav/gulpfile.js
[07:40:01] Starting 'all'...
[07:40:01] Starting 'sass'...
[07:40:02] Finished 'sass' after 1.45 s
[07:40:02] Starting 'webpack'...
[07:40:05] 
[07:40:05] Finished 'webpack' after 3.12 s
[07:40:05] Starting 'combine'...
[07:40:05] Finished 'combine' after 50 ms
[07:40:05] Starting 'copy'...
[07:40:05] Finished 'copy' after 154 ms
[07:40:05] Finished 'all' after 4.78 s
[07:40:05] Starting 'default'...
┌───────────────┬───────────────────────────────┬───────────────────────────────────────────────┬────────────────────┐
│ Task          │ Summary                       │ Source Files                                  │ Destination        │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼────────────────────┤
│ mix.sass()    │ 1. Compiling Sass             │ resources/assets/sass/app.scss                │ public/css/app.css │
│               │ 2. Autoprefixing CSS          │                                               │                    │
│               │ 3. Concatenating Files        │                                               │                    │
│               │ 4. Writing Source Maps        │                                               │                    │
│               │ 5. Saving to Destination      │                                               │                    │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼────────────────────┤
│ mix.webpack() │ 1. Transforming ES2015 to ES5 │ resources/assets/js/app.js                    │ public/js/app.js   │
│               │ 2. Writing Source Maps        │                                               │                    │
│               │ 3. Saving to Destination      │                                               │                    │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼────────────────────┤
│ mix.combine() │ 1. Concatenating Files        │ public/js/app.js                              │ public/js/app.js   │
│               │ 2. Saving to Destination      │ node_modules/jquery/dist/jquery.min.js        │                    │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/bootstrap-sass/assets/fonts/**/* │ public/fonts       │
└───────────────┴───────────────────────────────┴───────────────────────────────────────────────┴────────────────────┘


*SI !!! NON FUNZIONA !!!!*


==================================================================================================================================================================================================================================================================================================================================================================

*To install jQuery, do:*

npm install jquery --save

And then, in your bootstrap.js:

var $ = require("jquery");

==================================================================================================================================================================================================================================================================================================================================================================


*WYSIWYG*

Utilizzo [summernote](http://summernote.org/)


$ npm install cd-summernote --save

> in questo modo viene scritta anche la dipendenza nel file package.json


> ho dovuto rilanciare 

$ npm install

Usage


```js
> And then, in your bootstrap.js:

require('cd-summernote');
```

```css
@import '~cd-summernote/index.less';



ATTENZIONE 

require('cd-summernote'); lo metto nel mio bootstrap.js
 il file index.less lo devo compilare per ottenere un file css; utilzzo il comando
 mix.less() di elixir

By default source paths in elixir is 'resources/assets' and destination path is 'public' directory.
Ma posso sovrascrivere in questo modo

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .combine(['public/js/app.js','node_modules/jquery/dist/jquery.min.js'],'public/js/app.js')
       .less('index.less','public/css/supernote.css','node_modules/cd-summernote')
       .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
});


vagrant@homestead:~/Code/Laravel/public/cellav$ gulp
[09:53:47] Using gulpfile ~/Code/Laravel/public/cellav/gulpfile.js
[09:53:47] Starting 'all'...
[09:53:47] Starting 'sass'...
[09:53:49] Finished 'sass' after 1.48 s
[09:53:49] Starting 'webpack'...
[09:53:52] 
[09:53:52] Finished 'webpack' after 3.67 s
[09:53:52] Starting 'combine'...
[09:53:52] Finished 'combine' after 63 ms
[09:53:52] Starting 'less'...
[09:53:53] Finished 'less' after 721 ms
[09:53:53] Starting 'copy'...
[09:53:53] Finished 'copy' after 174 ms
[09:53:53] Finished 'all' after 6.11 s
[09:53:53] Starting 'default'...
┌───────────────┬───────────────────────────────┬───────────────────────────────────────────────┬──────────────────────────┐
│ Task          │ Summary                       │ Source Files                                  │ Destination              │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.sass()    │ 1. Compiling Sass             │ resources/assets/sass/app.scss                │ public/css/app.css       │
│               │ 2. Autoprefixing CSS          │                                               │                          │
│               │ 3. Concatenating Files        │                                               │                          │
│               │ 4. Writing Source Maps        │                                               │                          │
│               │ 5. Saving to Destination      │                                               │                          │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.webpack() │ 1. Transforming ES2015 to ES5 │ resources/assets/js/app.js                    │ public/js/app.js         │
│               │ 2. Writing Source Maps        │                                               │                          │
│               │ 3. Saving to Destination      │                                               │                          │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.combine() │ 1. Concatenating Files        │ public/js/app.js                              │ public/js/app.js         │
│               │ 2. Saving to Destination      │ node_modules/jquery/dist/jquery.min.js        │                          │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.less()    │ 1. Compiling Less             │ node_modules/cd-summernote/index.less         │ public/css/supernote.css │
│               │ 2. Autoprefixing CSS          │                                               │                          │
│               │ 3. Concatenating Files        │                                               │                          │
│               │ 4. Writing Source Maps        │                                               │                          │
│               │ 5. Saving to Destination      │                                               │                          │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/bootstrap-sass/assets/fonts/**/* │ public/fonts             │
└───────────────┴───────────────────────────────┴───────────────────────────────────────────────┴──────────────────────────┘


ATTENZIONE 

ottengo l'errore

$node.attr(...).tooltip is not a function(…)

perché Summernote use bootstrap's javascript for dialog and tooltip and so on.

quindi includo il js di bootstrap 


elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .combine(['public/js/app.js','node_modules/jquery/dist/jquery.min.js', 'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'node_modules/cd-summernote/index.js'],'public/js/app.js')
       .less('index.less','public/css/supernote.css','node_modules/cd-summernote')
       .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
});


...
┌───────────────┬───────────────────────────────┬─────────────────────────────────────────────────────────────────┬──────────────────────────┐
│ Task          │ Summary                       │ Source Files                                                    │ Destination              │
├───────────────┼───────────────────────────────┼─────────────────────────────────────────────────────────────────┼──────────────────────────┤
│ mix.sass()    │ 1. Compiling Sass             │ resources/assets/sass/app.scss                                  │ public/css/app.css       │
│               │ 2. Autoprefixing CSS          │                                                                 │                          │
│               │ 3. Concatenating Files        │                                                                 │                          │
│               │ 4. Writing Source Maps        │                                                                 │                          │
│               │ 5. Saving to Destination      │                                                                 │                          │
├───────────────┼───────────────────────────────┼─────────────────────────────────────────────────────────────────┼──────────────────────────┤
│ mix.webpack() │ 1. Transforming ES2015 to ES5 │ resources/assets/js/app.js                                      │ public/js/app.js         │
│               │ 2. Writing Source Maps        │                                                                 │                          │
│               │ 3. Saving to Destination      │                                                                 │                          │
├───────────────┼───────────────────────────────┼─────────────────────────────────────────────────────────────────┼──────────────────────────┤
│ mix.combine() │ 1. Concatenating Files        │ public/js/app.js                                                │ public/js/app.js         │
│               │ 2. Saving to Destination      │ node_modules/jquery/dist/jquery.min.js                          │                          │
│               │                               │ node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js │                          │
│               │                               │ node_modules/cd-summernote/index.js                             │                          │
├───────────────┼───────────────────────────────┼─────────────────────────────────────────────────────────────────┼──────────────────────────┤
│ mix.less()    │ 1. Compiling Less             │ node_modules/cd-summernote/index.less                           │ public/css/supernote.css │
│               │ 2. Autoprefixing CSS          │                                                                 │                          │
│               │ 3. Concatenating Files        │                                                                 │                          │
│               │ 4. Writing Source Maps        │                                                                 │                          │
│               │ 5. Saving to Destination      │                                                                 │                          │
├───────────────┼───────────────────────────────┼─────────────────────────────────────────────────────────────────┼──────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/bootstrap-sass/assets/fonts/**/*                   │ public/fonts             │
└───────────────┴───────────────────────────────┴─────────────────────────────────────────────────────────────────┴──────────────────────────┘


poi devo aggiungere anche i fonts

create:1 GET http://homestead.app/css/fonts/summernote.ttf 404 (Not Found)

aggiungo
       mix.copy('node_modules/cd-summernote/fonts', 'public/css/fonts');


##If we use Summernote editor by normal process then it is not possible to upload images on the server because Summernote converts images to Base 64 format so when we save an image in the database then it takes too much space in the database.##

##We can get image url and store image path in database instead of Base64 string using "intervention/image" package to work with image handling.##



 composer require intervention/images

> Intervention Image has optional support for Laravel and comes with a Service Provider and Facades for easy integration. The vendor/autoload.php is included by Laravel, so you don't have to require or autoload manually.

> After you have installed Intervention Image, open your Laravel config file config/app.php and add the following lines.

> In the $providers array add the service providers for this package.


  
>Intervention\Image\ImageServiceProvider::class

>Add the facade of this package to the $aliases array.


  
>'Image' => Intervention\Image\Facades\Image::class

>Now the Image Class will be auto-loaded by Laravel.

> By default Intervention Image uses PHP's GD library extension to process all images. 



ATTENZIONE::

nel vecchio file gulp.js 


elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .combine(['public/js/app.js','node_modules/jquery/dist/jquery.min.js', 'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'node_modules/cd-summernote/index.js'],'public/js/app.js')
       .less('index.less','public/css/supernote.css','node_modules/cd-summernote')
       .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts')
       .copy('node_modules/cd-summernote/fonts', 'public/css/fonts');
});


jquery e bootstrap vengono già caricate in app.js (che include bootstrap.js che fa i require)
quindi 
.combine(['public/js/app.js','node_modules/jquery/dist/jquery.min.js', 'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'node_modules/cd-summernote/index.js'],'public/js/app.js') 
diventa
.combine(['public/js/app.js', 'node_modules/cd-summernote/index.js'],'public/js/app.js')
*e così vanno anche i dropdown di summernote !!*


elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .combine(['public/js/app.js', 'node_modules/cd-summernote/index.js'],'public/js/app.js')
       .less('index.less','public/css/supernote.css','node_modules/cd-summernote')
       .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts')
       .copy('node_modules/cd-summernote/fonts', 'public/css/fonts');
});

vagrant@homestead:~/Code/Laravel/public/cellav$ gulp
[09:41:30] Using gulpfile ~/Code/Laravel/public/cellav/gulpfile.js
[09:41:30] Starting 'all'...
[09:41:30] Starting 'sass'...
[09:41:32] Finished 'sass' after 1.65 s
[09:41:32] Starting 'webpack'...
[09:41:36] 
[09:41:36] Finished 'webpack' after 4.04 s
[09:41:36] Starting 'combine'...
[09:41:36] Finished 'combine' after 67 ms
[09:41:36] Starting 'less'...
[09:41:37] Finished 'less' after 764 ms
[09:41:37] Starting 'copy'...
[09:41:37] Finished 'copy' after 184 ms
[09:41:37] Starting 'copy'...
[09:41:37] Finished 'copy' after 25 ms
[09:41:37] Finished 'all' after 6.74 s
[09:41:37] Starting 'default'...
┌───────────────┬───────────────────────────────┬───────────────────────────────────────────────┬──────────────────────────┐
│ Task          │ Summary                       │ Source Files                                  │ Destination              │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.sass()    │ 1. Compiling Sass             │ resources/assets/sass/app.scss                │ public/css/app.css       │
│               │ 2. Autoprefixing CSS          │                                               │                          │
│               │ 3. Concatenating Files        │                                               │                          │
│               │ 4. Writing Source Maps        │                                               │                          │
│               │ 5. Saving to Destination      │                                               │                          │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.webpack() │ 1. Transforming ES2015 to ES5 │ resources/assets/js/app.js                    │ public/js/app.js         │
│               │ 2. Writing Source Maps        │                                               │                          │
│               │ 3. Saving to Destination      │                                               │                          │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.combine() │ 1. Concatenating Files        │ public/js/app.js                              │ public/js/app.js         │
│               │ 2. Saving to Destination      │ node_modules/cd-summernote/index.js           │                          │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.less()    │ 1. Compiling Less             │ node_modules/cd-summernote/index.less         │ public/css/supernote.css │
│               │ 2. Autoprefixing CSS          │                                               │                          │
│               │ 3. Concatenating Files        │                                               │                          │
│               │ 4. Writing Source Maps        │                                               │                          │
│               │ 5. Saving to Destination      │                                               │                          │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/bootstrap-sass/assets/fonts/**/* │ public/fonts             │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/cd-summernote/fonts/**/*         │ public/css/fonts         │
└───────────────┴───────────────────────────────┴───────────────────────────────────────────────┴──────────────────────────┘
[09:41:37] Finished 'default' after 10 ms





STRIPE

user: lmaroncelli@gmail.com
pwd: <solita>610?




// When creating a customer
$customer = new Customer;
$customer->name = 'John Smith';
$customer->email = 'jsmith@example.com';

$stripe_customer = Stripe_Customer::create(array(
  "description" => $customer->name,
  "email" => $customer->email
));

$customer->stripe_id = $stripe_customer->id;  // Keep this! We'll use it again!
$customer->save();


// When creating a charge
Stripe_Charge::create(array(
  "amount" => 2999,
  "currency" => "usd",
  "customer" => Auth::user()->stripe_id,      // Assign it to the customer
  "description" => "Payment for Invoice 4321"
));


Get card id from Stripe API

A customer can have multiple cards, so $customer->sources->data is an array (as you should be able to tell from the square brackets around the value of this property). Therefore, you need to index it.

print_r($customer->sources->data[0]->id);
And if a customer has saved multiple credit cards, you should loop over it:

foreach ($customer->sources->data as $card) {
    print_r($card->id);
}







*Dropzone.js Multi upload image*

Dalla documentazione https://www.npmjs.com/package/dropzone

npm install dropzone --save

ha creato la cartella dropzone in node_modules e con l'opzione --save ha scritto la dipendenza nel file package.json



nel file resources/assets/bootstrap.js includo dopzone, con:


require('dropzone');



poi nel file gulp.js aggiungo i suoi js e css

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .combine(['public/js/app.js', 'node_modules/cd-summernote/index.js'],'public/js/app.js')
       .copy('node_modules/dropzone/dist/dropzone.js','public/js/dropzone.js')
       .copy('node_modules/dropzone/dist/basic.css','public/css/dropzone/basic.css')
       .copy('node_modules/dropzone/dist/dropzone.css','public/css/dropzone/dropzone.css')
       .less('index.less','public/css/supernote.css','node_modules/cd-summernote')
       .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts')
       .copy('node_modules/cd-summernote/fonts', 'public/css/fonts');
});


in modo da avere i file nella directory public e poterli linkare !!!


luigi@lenovo /var/www/html/celiachiamo $ gulp
[15:24:51] Using gulpfile /var/www/html/celiachiamo/gulpfile.js
[15:24:51] Starting 'all'...
[15:24:51] Starting 'sass'...
[15:24:55] Finished 'sass' after 3.73 s
[15:24:55] Starting 'webpack'...
[15:25:03] 
[15:25:04] Finished 'webpack' after 8.44 s
[15:25:04] Starting 'combine'...
[15:25:04] Finished 'combine' after 186 ms
[15:25:04] Starting 'copy'...
[15:25:04] Finished 'copy' after 803 ms
[15:25:04] Starting 'copy'...
[15:25:05] Finished 'copy' after 61 ms
[15:25:05] Starting 'copy'...
[15:25:05] Finished 'copy' after 50 ms
[15:25:05] Starting 'less'...
[15:25:07] Finished 'less' after 1.96 s
[15:25:07] Starting 'copy'...
[15:25:07] Finished 'copy' after 376 ms
[15:25:07] Starting 'copy'...
[15:25:07] Finished 'copy' after 121 ms
[15:25:07] Finished 'all' after 16 s
[15:25:07] Starting 'default'...
┌───────────────┬───────────────────────────────┬───────────────────────────────────────────────┬──────────────────────────────────┐
│ Task          │ Summary                       │ Source Files                                  │ Destination                      │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.sass()    │ 1. Compiling Sass             │ resources/assets/sass/app.scss                │ public/css/app.css               │
│               │ 2. Autoprefixing CSS          │                                               │                                  │
│               │ 3. Concatenating Files        │                                               │                                  │
│               │ 4. Writing Source Maps        │                                               │                                  │
│               │ 5. Saving to Destination      │                                               │                                  │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.webpack() │ 1. Transforming ES2015 to ES5 │ resources/assets/js/app.js                    │ public/js/app.js                 │
│               │ 2. Writing Source Maps        │                                               │                                  │
│               │ 3. Saving to Destination      │                                               │                                  │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.combine() │ 1. Concatenating Files        │ public/js/app.js                              │ public/js/app.js                 │
│               │ 2. Saving to Destination      │ node_modules/cd-summernote/index.js           │                                  │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/dropzone/dist/dropzone.js        │ public/js/dropzone.js            │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/dropzone/dist/basic.css          │ public/css/dropzone/basic.css    │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/dropzone/dist/dropzone.css       │ public/css/dropzone/dropzone.css │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.less()    │ 1. Compiling Less             │ node_modules/cd-summernote/index.less         │ public/css/supernote.css         │
│               │ 2. Autoprefixing CSS          │                                               │                                  │
│               │ 3. Concatenating Files        │                                               │                                  │
│               │ 4. Writing Source Maps        │                                               │                                  │
│               │ 5. Saving to Destination      │                                               │                                  │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/bootstrap-sass/assets/fonts/**/* │ public/fonts                     │
├───────────────┼───────────────────────────────┼───────────────────────────────────────────────┼──────────────────────────────────┤
│ mix.copy()    │ 1. Saving to Destination      │ node_modules/cd-summernote/fonts/**/*         │ public/css/fonts                 │
└───────────────┴───────────────────────────────┴───────────────────────────────────────────────┴──────────────────────────────────┘
[15:25:07] Finished 'default' after 12 ms





*Migration rollback e foreign keys*

Quando creo una tabella o modifico una tabella aggiungendo un FK, se faccio rollback per eliminarla viene generato un errore del tipo
General error: 1553 Cannot drop index ...
E' necessario inserire nella function down() il codice per eliminare il constraint

es:

public function up()
    {
        Schema::create('tblHomePages', function (Blueprint $table) {
            $table->increments('id');
            ...
            $table->integer('header_slide_id')->unsigned();
            $table->foreign('header_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
            ...

Siccome le FK create da Laravel sono del tipo "table_fields_foreign"

 public function down()
    {   
        // Your foreign keys is named table_fields_foreign
        Schema::table('tblHomePages', function(Blueprint $table) {
            $table->dropForeign('tblHomePages_header_slide_id_foreign');
        });
        
        Schema::dropIfExists('tblHomePages');
    }

OPPURE

public function up()
{
    Schema::table('tblHomePages', function (Blueprint $table) {
       ...... 
        $table->foreign('prodotti_freschi_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
        $table->foreign('prodotti_confezionati_slide_id')->references('id')->on('tblSlide')->onDelete('cascade');
    ...


public function down()
{
    Schema::table('tblHomePages', function (Blueprint $table) {

        // Your foreign keys is named table_fields_foreign
        Schema::table('tblHomePages', function(Blueprint $table) {
            $table->dropForeign('tblHomePages_prodotti_freschi_slide_id_foreign');
            $table->dropForeign('tblHomePages_prodotti_confezionati_slide_id_foreign');
        });
        
        $table->dropColumn('prodotti_freschi_slide_id');
        $table->dropColumn('prodotti_confezionati_slide_id');
        ....




*Creare un seed attaccato alla migration*
public function up()
  {
     Schema::create('tblHomePages', function (Blueprint $table) {
                $table->increments('id');
                ......
      }

      Artisan::call( 'db:seed', [
          '--class' => 'CreateHomePageSeeder',
          '--force' => true
      ]);
  }



===================================================================
===================================================================

Ristrutturazione/riprogettazione del sito con:

Utilizzo di un frmework all'avanguardia con conseguente accantonamento delle tecnologie obsolete e miglioramenti in termini di sicurezza e performance.

Creazione di un CMS per la gestione delle pagine statiche a cui si abbina una sorta di configuratore per includere parti dinamiche con possibilità di filtri.

Creazione di un carrello per memorizzare i prodotti scelti dall'utente con la possibilità di eseguire il checkout con Stripe: in questo caso viene salvato su Stripe il cliente con il proprio profilo di pagamento in modo da poter richiamare questi dati quando il medesimo cliente rientra sul sito senza doverli reinserie ogni volta (i dati meno sensibili come indirizzi e nominativi vengono salvati sul sito, ma ugualmente riproposti): in questo modo si rendono più veloci ed intuitivi gli acquisti successivi al primo con ovvi benefici per il merchant.




__View Composer__

> https://laracasts.com/series/laravel-from-scratch-2017/episodes/21

in tutte le pagine dell'admin ho bisogon di avere la varibile $custompages che contine tutti i titoli delle pagine custom da mettere nella select in alto. Creo questa variabile nel service provider AppServiceProvider


 public function boot()
    {
        view()->composer('admin.layouts.backend', function($view) {
            $view->with('custompages', CustomPage::where('id','!=',1)->get());
        });
    }

in modo da averla sempre disponibile nel backend


