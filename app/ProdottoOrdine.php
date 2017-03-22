<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdottoOrdine extends Model
{
 	
 	protected $table = 'tblProdottiOrdine';


 	public function ordine()
		{
			return $this->belongsTo('App\Ordine','ordine_id','id');
		}

	public function prodotto()
		{
			return $this->belongsTo('App\Prodotto','prodotto_id','id');
		}

}
