<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdottoCarrello extends Model
{
 	
 	protected $table = 'tblProdottiCarrello';


 	public function carrello()
		{
			return $this->belongsTo('App\Carrello','carrello_id','id');
		}

	public function prodotto()
		{
			return $this->belongsTo('App\Prodotto','prodotto_id','id');
		}

}
