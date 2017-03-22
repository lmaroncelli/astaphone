<?php 

namespace App;

use App\Articolo;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Tag extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tblTags';
	protected $fillable = array('nome');


	public function articoli(){

		return $this->belongsToMany('App\Articolo','tblArticoliTags','tag_id','articolo_id')->withTimestamps();

	}


	/*===================================================
	=            VALIDATOR RULES           	 			=
	===================================================*/
	public static $rules = array(
		'name' => 'required'
	);


}