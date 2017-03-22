<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

	protected $table = 'tblCategorie';

  protected $fillable = [
        'nome',
		];

	public function prodotti()
	{
		return $this->belongsToMany('App\Prodotto','tblCategorieProdotti','categoria_id', 'prodotto_id');
	}


}
