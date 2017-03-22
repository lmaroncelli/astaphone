<?php 

namespace App;


use App\Articolo;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class CommentoArticolo extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tblCommenti';
	protected $fillable = array('corpo','autore');



	public function articolo(){

		return $this->belongsTo('App\Articolo','articolo_id','id');

	}


}