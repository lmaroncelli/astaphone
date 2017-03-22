<?php

namespace App;
;
use Illuminate\Database\Eloquent\Model;

class SlideProdottoWidget extends Model
{
	protected $table = 'tblSlideProdottiWidget';

	protected $fillable = [
	      'id',
				'nome',
				'slide_id',
				'titolo',
				'descrizione',
				'url_pagina',
				'url_video',
			];


	public function slide()
		{
			return $this->belongsTo('App\Slide','slide_id','id');
		}

	/**
	 * [un widget è associato a molte pagine come widget prodotti freschi widget->pagineAsWidgetPF()]
	 * potrei avere un'altra relazione che si riferisce ad un'altra FK e che si chiama in modo diverso
	 * es: widget->pagineAsWidgetPC()
	 * @return [type] [description]
	 */
	public function pagineAsWidgetPF()
		{
			return $this->hasMany('App\Page','prodotti_freschi_widget_id','id');
		}



	/**
	 * [un widget è associato a molte pagine come widget prodotti confezionati widget->pagineAsWidgetPC()]
	 * potrei avere un'altra relazione che si riferisce ad un'altra FK e che si chiama in modo diverso
	 * es: widget->pagineAsWidgetPF()
	 * @return [type] [description]
	 */
	public function pagineAsWidgetPC()
		{
			return $this->hasMany('App\Page','prodotti_confezionati_widget_id','id');
		}

}
