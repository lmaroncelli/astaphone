<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produttore extends Model
{

	protected $table = 'tblProduttori';

  protected $fillable = [
        'nome',
		];

	/**
	 * [Un produttore ha molti prodotti]
	 * 
	 * @return [\Illuminate\Database\Eloquent\Relations\HasMany] 
	 */
	
	 public function prodotti()
	 	{
	 		$this->hasMany('App\Prodotto','produttore_id','id');
	 	}


}
