<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ricetta extends Model
{
 	
 	protected $table = 'tblRicette';


 	protected $fillable = [
	        'titolo',
	        
	        'descrizione',
	        'ingredienti',
	        'preparazione',

	        'foto',
	        
	        'title',
	        'keywords',
	        'description',
	        'uri',
	        
	        'visibile',
	        'categoria_id',
			];


 	public function categoria()
		{
			return $this->belongsTo('App\CategoriaRicetta','categoria_id','id');
		}



	public function scopeVisibile($query)
		{
			return $query->where('visibile', 1);	
		}

}
