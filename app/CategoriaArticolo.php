<?php 

namespace App;


use App\Articolo;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class CategoriaArticolo extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tblCategorieArticoli';
	protected $fillable = array('nome','descrizione');



	public function articoli(){

		return $this->hasMany('App\Articolo','categoria_id','id');

	}


}