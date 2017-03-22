<?php

namespace App;

use App\ImmaginiSlideCategorieProdotti;
use Illuminate\Database\Eloquent\Model;

class SlideCategorieProdotti extends Model
{
	protected $table = 'tblSlideCategorieProdotti';

	protected $fillable = [
	        'titolo',
			];


	public function immagini()
		{
			return $this->hasMany('App\ImmaginiSlideCategorieProdotti','slide_id','id');
		}


	/**
	 * @return [type] [description]
	 */
	public function pagine()
		{
			return $this->hasMany('App\Page','categorie_prodotti_slide_id','id');
		}


	public function scopeTitolo($query, $titolo)
	   {
	       return $query->where('titolo', $titolo);
	   }



}
