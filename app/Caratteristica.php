<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caratteristica extends Model
{

	protected $table = 'tblCaratteristiche';

  protected $fillable = [
        'nome',
		];


	public function prodotti()
	{
		return $this->belongsToMany('App\Prodotto','tblCaratteristicheProdotti','caratteristica_id','prodotto_id');
	}
	


}
