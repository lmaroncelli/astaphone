<?php

namespace App;

use App\Galleria;
use Illuminate\Database\Eloquent\Model;

class ImmagineGalleria extends Model
{
 	
 	protected $table = 'tblImmaginiGalleria';


 	protected $fillable = [
 					'nome',
	        'titolo',
	        'descrizione',
	        'galleria_id'
	    
			];


 	public function galleria()
		{
			return $this->belongsTo('App\Galleria','galleria_id','id');
		}

}
