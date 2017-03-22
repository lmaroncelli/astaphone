<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrello extends Model
{
	protected $table = 'tblCarrelli';

	protected $fillable = [
	        'user_id',
			];


	public function prodotti()
		{
			return $this->hasMany('App\ProdottoCarrello','carrello_id','id');
		}


	public function utente()
		{
			return $this->belongsTo('App\User','user_id','id');
		}


	public function getTotale()
		{

		$prodottiCarrello = $this->prodotti;

		$total=0.00;
		
		foreach($prodottiCarrello as $prodottoCarrello)
			{

		    $prezzo = $prodottoCarrello->prezzo;
				$qty = $prodottoCarrello->numero;
				$total+=$prezzo*$qty;
				
			}
		
		return $total;
		
		}


	////////////////////////
	// il totale in cents //
	////////////////////////
	public function getTotaleForStripe()
		{
		return $this->getTotale()*100;
		}

}
