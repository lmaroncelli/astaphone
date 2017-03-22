<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

	protected $table = 'tblPages';

    protected $fillable = [
        'title','uri','content','listing','listingCaratteristiche', 'listingCategorie', 'inMenu', 'header_slide_id',
        'categorie_prodotti_slide_id',
'prodotti_freschi_widget_id',
'prodotti_confezionati_widget_id',
'three_columns_widget_id',
'gm_nome',
'gm_indirizzo',
'gm_lat',
'gm_long',
    ];



   	public function headerSlide()
  		{
  			return $this->belongsTo('App\Slide','header_slide_id','id');
  		}

    public function categorieProdottiSlide()
      {
        return $this->belongsTo('App\SlideCategorieProdotti','categorie_prodotti_slide_id','id');
      }

		public function widgetProdottiFreschi()
  		{
  			return $this->belongsTo('App\SlideProdottoWidget','prodotti_freschi_widget_id','id');
  		}  	

		public function widgetProdottiConfezionati()
  		{
  			return $this->belongsTo('App\SlideProdottoWidget','prodotti_confezionati_widget_id','id');
  		}  	

    public function widgetThreeColumns()
      {
        return $this->belongsTo('App\ThreeColumnsWidget','three_columns_widget_id','id');
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

    public function setCategorieProdottiSlideIdAttribute($value)
      {
          if ($value == 0) 
            {
            $value = null;
            }
          $this->attributes['categorie_prodotti_slide_id'] = $value;
      }

  	 public function setProdottiFreschiWidgetIdAttribute($value)
  	  {
  	  		if ($value == 0) 
  	  			{
  	  			$value = null;
  	  			}
  	      $this->attributes['prodotti_freschi_widget_id'] = $value;
  	  }

  	 public function setThreeColumnsWidgetIdAttribute($value)
  	  {
  	  		if ($value == 0) 
  	  			{
  	  			$value = null;
  	  			}
  	      $this->attributes['three_columns_widget_id'] = $value;
  	  }


      public function setProdottiConfezionatiWidgetIdAttribute($value)
       {
          if ($value == 0) 
            {
            $value = null;
            }
           $this->attributes['prodotti_confezionati_widget_id'] = $value;
       }



}
