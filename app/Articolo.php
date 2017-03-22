<?php

namespace App;


use App\CategoriaArticolo;
use App\CommentoArticolo;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;



class Articolo extends Model
{

	use SoftDeletes;

	
	protected $dates = ['deleted_at'];
	protected $table = 'tblArticoli';
	protected $fillable = array('titolo','slug','corpo', 'immagine', 'thumb', 'user_id');




	public static $columns = [
				'title' => 'Title',
				'slug' => 'Slug', 
				'category_name' => 'Category',
				'created_at' => 'Created', 
				'updated_at' => 'Updated'
				];




	public function autore(){

		return $this->belongsTo('App\User','user_id','id');

	}

	public function categoria(){

		return $this->belongsTo('App\CategoriaArticolo','categoria_id','id');

	}

	public function tags(){
		return $this->belongsToMany('App\Tag')->withTimestamps();
		return $this->belongsToMany('App\Tag','tblArticoliTags','articolo_id', 'tag_id');
	}


	public function commenti() 
	{
		return $this->hasMany('App\CommentoArticolo','articolo_id','id');
	}





	
	/**
	 * Crea excerpt per articolo togliendo il syntax Highlighting e/o la classe predefinita del WYSIWYG con cui formatto i comandi nell'articolo e/o formattazione classi di bootstrap
	 * @param int $limit 
	 * @param string $end 
	 * @return string
	 */
	
	/*public function getExcerpt($limit=100, $end="...")
	{
		$search = array('<pre class="brush:php;">','</pre>','<code>','</code>','<kbd>','</kbd>');
		$replace = "";
		return Str::words(
					str_replace($search, $replace, $this->body), 
					$limit, 
					' <a href="'. route('blog/show',$parameters = array('id' => $this->id)).'">'.$end.'</a>'
				);
	}*/



    /*
	Query scope da usare nell'ordinamento
    */

    public function scopeCategory_name($query, $order)
	{
	    return $query->join('tblCategorieArticoli', 'tblArticoli.categoria_id', '=', 'tblCategorieArticoli.id')
	    		->select('tblArticoli.*')
    			->orderBy('tblCategorieArticoli.nome', $order);
	} 



}