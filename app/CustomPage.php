<?php

namespace App;
;
use Illuminate\Database\Eloquent\Model;

class CustomPage extends Model
{
	protected $table = 'tblCustomPages';

	protected $fillable = [
					'uri',
	        'seo_title',
	        'seo_description',
	        'content',
	        'listing',
	        'listingCategorie',
	        'listingCaratteristiche',
	        'header_slide_id',
	        'img_magliana',
	        'desc_magliana',
	        'img_cipro',
	        'desc_cipro',
	        'img_tiburtina',
	        'desc_tiburtina',
	        'gm_nome',
					'gm_indirizzo',
					'gm_lat',
					'gm_long',
					'gm_info',
					'gm_lat2',
					'gm_long2',
					'gm_info2',
					'gm_lat3',
					'gm_long3',
					'gm_info3',
			];


	 	public function headerSlide()
			{
				return $this->belongsTo('App\Slide','header_slide_id','id');
			}




		// le FK header_slide_id, categorie_prodotti_slide_id, prodotti_freschi_widget_id, prodotti_confezionati_widget_id
		// NON POSSONO ESSERE 0, quindi faccio un mutator per ognuna che mette null al posto di 0
		public function setHeaderSlideIdAttribute($value)
		  {
		  		if ($value == 0) 
		  			{
		  			$value = null;
		  			}
		      $this->attributes['header_slide_id'] = $value;
		  }


		 public function scopeTitolo($query, $titolo)
			{
			     return $query->where('title', $titolo);
			} 

}
