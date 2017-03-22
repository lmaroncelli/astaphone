<?php

namespace App;

use App\ImmagineSlide;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
	protected $table = 'tblSlide';

	protected $fillable = [
	        'titolo',
			];


	public function immagini()
		{
			return $this->hasMany('App\ImmagineSlide','slide_id','id');
		}


	public function widget()
		{
			return $this->hasOne('App\SlideProdottiWidget','slide_id','id');
		}

	/**
	 * [uno slide è associato a molte pagine come header slide->pagineAsHeader()]
	 * potrei avere un'altra relazione che si riferisce ad un'altra FK e che si chiama in modo diverso
	 * es: slide->pagineAsFooter()
	 * @return [type] [description]
	 */
	public function pagineAsHeader()
		{
			return $this->hasMany('App\Page','header_slide_id','id');
		}


	public function scopeTitolo($query, $titolo)
	   {
	       return $query->where('titolo', $titolo);
	   }



}
