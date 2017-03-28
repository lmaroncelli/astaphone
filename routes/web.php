<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// ROUTE ACCESSIBILI SOLO AL PROFILO ADMIN: oltre a dover essere loggato perché estende AdminController, è in un  //
// groupMiddleware che verifica se sono Admin                                                                     //
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['middleware' => ['admin']], function () {
		
		Route::get('/pannello', ['as' => 'pannello', 'uses' => 'Admin\AdminController@index']);
  
		Route::get('admin/users/{user}/confirm', ['as' => 'users.confirm', 'uses' => 'Admin\UsersController@confirm']);

		Route::resource('admin/users', 'Admin\UsersController');


		Route::get('admin/pages/{page}/confirm', ['as' => 'pages.confirm', 'uses' => 'Admin\PagesController@confirm']);
		Route::post('admin/pages/uri_ajax', ['as' => 'pages.uri_ajax', 'uses' => 'Admin\PagesController@createUri']);

		Route::resource('admin/pages', 'Admin\PagesController');

		Route::get('admin/prodotti/{prodotto}/confirm', ['as' => 'prodotti.confirm', 'uses' => 'Admin\ProdottiController@confirm']);

		Route::post('admin/prodotti/deleteImageMain', ['as' => 'prodotti.deleteImageMain', 'uses' => 'Admin\ProdottiController@deleteImageMainAjax']);
		
		Route::resource('admin/prodotti', 'Admin\ProdottiController');

		Route::get('admin/ricette/{ricetta}/confirm', ['as' => 'ricette.confirm', 'uses' => 'Admin\RicetteController@confirm']);
		Route::resource('admin/ricette', 'Admin\RicetteController');

		Route::get('admin/categorie-ricette/{categoria}/confirm', ['as' => 'categorie-ricette.confirm', 'uses' => 'Admin\CategorieRicetteController@confirm']);
		Route::resource('admin/categorie-ricette', 'Admin\CategorieRicetteController');


		
		Route::get('admin/gallery/carica/{id}', ['as' => 'gallerie.carica', 'uses' => 'Admin\GallerieController@carica']);
		Route::post('admin/gallery/uploadFile', ['as' => 'gallerie.upload', 'uses' => 'Admin\GallerieController@uploadFile']);
		Route::get('admin/gallerie/{galleria}/confirm', ['as' => 'gallerie.confirm', 'uses' => 'Admin\GallerieController@confirm']);
		Route::resource('admin/gallerie', 'Admin\GallerieController');



		Route::resource('admin/articoli', 'Admin\ArticoliController');
		Route::resource('admin/categorie-articoli', 'Admin\CategorieArticoliController');




		/* HOME PAGE */

		Route::get('admin/homepage', ['as' => 'homepage.edit', 'uses' => 'Admin\HomePageController@edit']);
		Route::post('admin/homepage', ['as' => 'homepage.save', 'uses' => 'Admin\HomePageController@update']);


		Route::post('admin/homepage/save_map', ['as' => 'homepage.save_map', 'uses' => 'Admin\HomePageController@saveMap']);

		Route::post('admin/homepage/uploadSlideHeader', ['as' => 'homepage.uploadSlideHeader', 'uses' => 'Admin\HomePageController@uploadSlideHeader']);
		Route::post('admin/homepage/uploadSlideFooter', ['as' => 'homepage.uploadSlideFooter', 'uses' => 'Admin\HomePageController@uploadSlideFooter']);

		
		Route::post('admin/homepage/modifySlideHeader', ['as' => 'homepage.modifySlideHeader', 'uses' => 'Admin\HomePageController@modifySlideHeader']);
		Route::post('admin/homepage/modifySlideFooter', ['as' => 'homepage.modifySlideFooter', 'uses' => 'Admin\HomePageController@modifySlideFooter']);

		Route::post('admin/homepage/deleteSliderImage', ['as' => 'homepage.deleteSliderImage', 'uses' => 'Admin\HomePageController@deleteSliderImageAjax']);

		Route::post('admin/homepage/deleteNegozioImage', ['as' => 'homepage.deleteNegozioImage', 'uses' => 'Admin\HomePageController@deleteNegozioImageAjax']);
		
		Route::post('admin/homepage/deleteMapImage', ['as' => 'homepage.deleteMapImage', 'uses' => 'Admin\HomePageController@deleteMapImageAjax']);

		Route::post('admin/homepage/uploadVideoPresentazione', ['as' => 'homepage.uploadVideoPresentazione', 'uses' => 'Admin\HomePageController@uploadVideoPresentazione']);

		Route::post('admin/homepage/uploadSlideProdttiConfezionati', ['as' => 'homepage.uploadSlideProdttiConfezionati', 'uses' => 'Admin\HomePageController@uploadSlideProdttiConfezionati']);

		Route::post('admin/homepage/modifySEOFileds', ['as' => 'homepage.modifySEOFileds', 'uses' => 'Admin\HomePageController@modifySEOFileds']);
		Route::post('admin/homepage/setVideoURL', ['as' => 'homepage.setVideoURL', 'uses' => 'Admin\HomePageController@setVideoURL']);

		


		/* CUSTOM PAGE */
	
		Route::get('admin/custompage/{titolo}', ['as' => 'custompage.edit', 'uses' => 'Admin\CustomPageController@edit']);
		Route::post('admin/custompage/{id}', ['as' => 'custompage.save', 'uses' => 'Admin\CustomPageController@update']);	

		Route::post('admin/custompage/save_map', ['as' => 'custompage.save_map', 'uses' => 'Admin\CustomPageController@saveMap']);
		
		Route::post('admin/custompage/deleteMapImage', ['as' => 'custompage.deleteMapImage', 'uses' => 'Admin\CustomPageController@deleteMapImageAjax']);






		/* SLIDE */
	  Route::get('admin/slide/{slide}/confirm', ['as' => 'slide.confirm', 'uses' => 'Admin\SlideController@confirm']);		
		
		Route::post('admin/slide/uploadSlide', ['as' => 'slide.uploadSlide', 'uses' => 'Admin\SlideController@uploadSlide']);
		Route::post('admin/slide/modifySlide', ['as' => 'slide.modifySlide', 'uses' => 'Admin\SlideController@modifySlide']);
		Route::post('admin/slide/deleteSliderImage', ['as' => 'slide.deleteSliderImage', 'uses' => 'Admin\SlideController@deleteSliderImageAjax']);

		Route::resource('admin/slide', 'Admin\SlideController');


		/* SLIDE CATEGORIE PRODOTTI */

		 Route::get('admin/slide-categorie/{slide}/confirm', ['as' => 'slide-categorie.confirm', 'uses' => 'Admin\SlideCategorieProdottiController@confirm']);

		Route::resource('admin/slide-categorie', 'Admin\SlideCategorieProdottiController');




		/* WIDGET SLIDE PRODOTTI */
	  Route::get('admin/slide-prodotti-widget/{widget}/confirm', ['as' => 'slide-prodotti-widget.confirm', 'uses' => 'Admin\SlideProdottiWidgetController@confirm']);
		Route::resource('admin/slide-prodotti-widget', 'Admin\SlideProdottiWidgetController');



		/* WIDGET CATEGORIE PRODOTTI */
	  /*Route::get('admin/categorie-prodotti-widget/{widget}/confirm', ['as' => 'categorie-prodotti-widget.confirm', 'uses' => 'Admin\SlideCategorieProdottiWidgetController@confirm']);
		Route::resource('admin/categorie-prodotti-widget', 'Admin\SlideCategorieProdottiWidgetController');*/


		/* WIDGET THREECOLS */
	  Route::get('admin/three-cols-widget/{widget}/confirm', ['as' => 'three-cols-widget.confirm', 'uses' => 'Admin\ThreeColumnsWidgetController@confirm']);
		Route::resource('admin/three-cols-widget', 'Admin\ThreeColumnsWidgetController');


});

//////////////////////////////////////////////////
// fine ROUTE ACCESSIBILI SOLO AL PROFILO ADMIN	//
/////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////
// ROUTE ACCESSIBILE SOLO DA LOGGATO PERCHE' ESTENDE AdminController //
///////////////////////////////////////////////////////////////////////
Route::any('carrello/add/{prodotto_id}', ['as' => 'carrello.add', 'uses' => 'Admin\CarrelloController@addProdotto']);
Route::any('carrello/remove/{prodotto_id}', ['as' => 'carrello.remove', 'uses' => 'Admin\CarrelloController@removeProdotto']);

Route::get('carrello', ['as' => 'carrello.show', 'uses' => 'Admin\CarrelloController@showCarrello']);

Route::get('update-carrello-qty', ['as' => 'carrello.update-qty', 'uses' => 'Admin\CarrelloController@updateCarrelloQtyAjax']);

Route::get('checkout', ['as' => 'checkout', 'uses' => 'Admin\CarrelloController@getCheckout']);
Route::post('checkout', ['as' => 'checkout', 'uses' => 'Admin\CarrelloController@postCheckout']);


Route::get('user-profile', ['as' => 'user.profile', 'uses' => 'Admin\UsersController@showProfile'])/*->middleware('beforeDBQuery','afterDBQuery')*/;




////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////// //
// route to access images Laravel 5 - How to access image uploaded in storage within View? // //
///////////////////////////////////////////////////////////////////////////////////////////// //
// How to define a Laravel route with a parameter that contains a slash character             //
////////////////////////////////////////////////////////////////////////////////////////////////

// se l'immagine è vuota e punta a http://homestead.app/images/
Route::get('images/', function ()
{	
    	$path = public_path() . '/frontend/assets/img/image-not-found.jpg';
			$file = File::get($path);
			$type = File::mimeType($path);

			$response = Response::make($file, 200);
			$response->header("Content-Type", $type);
		

    return $response;

});

Route::get('images/{filename_withslash}', function ($filename_withslash)
{	
    $path = storage_path() . '/app/' . $filename_withslash;

    // se l'immagine è sbagliata
    if(!File::exists($path)) 
    	{
    	$path = public_path() . '/frontend/assets/img/image-not-found.jpg';
			$file = File::get($path);
			$type = File::mimeType($path);

			$response = Response::make($file, 200);
			$response->header("Content-Type", $type);
			} 
		else 
			{
	    $file = File::get($path);
	    $type = File::mimeType($path);

	    $response = Response::make($file, 200);
	    $response->header("Content-Type", $type);
			}


    return $response;

})->where('filename_withslash', '(.*)');



// se l'immagine è vuota e punta a http://homestead.app/images/
Route::get('thumbs/', function ()
{	
    	$path = public_path() . '/frontend/assets/img/image-not-found.jpg';
			$file = File::get($path);
			$type = File::mimeType($path);

			$response = Response::make($file, 200);
			$response->header("Content-Type", $type);
		

    return $response;

});

Route::get('thumbs/{filename_withslash}', function ($filename_withslash)
{	
    $path = storage_path() . '/app_thumb/' . $filename_withslash;

    // se l'immagine è sbagliata
    if(!File::exists($path)) 
    	{
    	$path = public_path() . '/frontend/assets/img/image-not-found.jpg';
			$file = File::get($path);
			$type = File::mimeType($path);

			$response = Response::make($file, 200);
			$response->header("Content-Type", $type);
			} 
		else 
			{
	    $file = File::get($path);
	    $type = File::mimeType($path);

	    $response = Response::make($file, 200);
	    $response->header("Content-Type", $type);
			}


    return $response;

})->where('filename_withslash', '(.*)');


//////////////////
// ROUTE LIBERA //
//////////////////

Route::get('/{slug?}', 'SiteController@make')/*->middleware('beforeDBQuery','afterDBQuery')*/;
Route::get('/categoria/{slug?}', 'SiteController@makeCategoria')/*->middleware('beforeDBQuery','afterDBQuery')*/;


//////////
// blog //
//////////

Route::get('blog/show/{id}', array('as' => 'blog/show', 'uses' => 'BlogController@show'));

Route::get('blog/{query_id?}/{s_cat_id?}', array('as' => 'blog', 'uses' => 'BlogController@index'));
