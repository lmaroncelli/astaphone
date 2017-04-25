<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatti extends Model
{
 	
 	protected $table = 'tblContatti';


 	protected $fillable = [
				'name',
				'email',
				'telephone',
				'message',
				'data_invio',
			];

}
