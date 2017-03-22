<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordine extends Model
{
	protected $table = 'tblOrdini';

	protected $fillable = [
	        'user_id',
	        'totale',
	        'note',
	        'indirizzo_fatturazione', 
	        'citta_fatturazione', 
	        'cap_fatturazione', 
	        'provincia_fatturazione',
	        'indirizzo_spedizione', 
	        'citta_spedizione', 
	        'cap_spedizione', 
	        'provincia_spedizione',
	        'stripe_payment_id',
			];


	public function prodotti()
		{
			return $this->hasMany('App\ProdottoOrdine','ordine_id','id');
		}


	public function cliente()
		{
			return $this->belongsTo('App\User','user_id','id');
		}

}
