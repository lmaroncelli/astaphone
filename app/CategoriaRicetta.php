<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaRicetta extends Model
{
	protected $table = 'tblCategorieRicette';

	protected $fillable = [
	        'nome',
					'uri',
					'img',
					'title',
					'keywords',
					'description',
					'ordine',
			];


	public function ricette()
		{
			return $this->hasMany('App\Ricetta','categoria_id','id');
		}

}
