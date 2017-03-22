<?php

namespace App;

use App\SlideCategorieProdotti;
use Illuminate\Database\Eloquent\Model;

class ImmaginiSlideCategorieProdotti extends Model
{
 	
 	protected $table = 'tblImmaginiSlideCategorieProdotti';


 	protected $fillable = [
 					'nome',
	        'descrizione',
	        'slide_id',
	        'url_pagina',
					'categoria_id',
	    
			];


 	public function slide()
		{
			return $this->belongsTo('App\SlideCategorieProdotti','slide_id','id');
		}

}
