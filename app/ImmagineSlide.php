<?php

namespace App;

use App\Slide;
use Illuminate\Database\Eloquent\Model;

class ImmagineSlide extends Model
{
 	
 	protected $table = 'tblImmaginiSlide';


 	protected $fillable = [
 					'nome',
	        'descrizione',
	        'slide_id',
	        'mime',
	    
			];


 	public function slide()
		{
			return $this->belongsTo('App\Slide','slide_id','id');
		}

}
