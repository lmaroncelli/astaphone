<?php

namespace App;
;
use Illuminate\Database\Eloquent\Model;

class ThreeColumnsWidget extends Model
{
	protected $table = 'tblThreeColumnsWidget';


	/*
	If you would like to make all attributes mass assignable, you may define the $guarded property as an empty array:
	 */
	protected $guarded = [];


	/**
	 * [un widget è associato a molte pagine come widget prodotti freschi widget->pagineAsWidgetPF()]
	 * potrei avere un'altra relazione che si riferisce ad un'altra FK e che si chiama in modo diverso
	 * es: widget->pagineAsWidgetPC()
	 * @return [type] [description]
	 */
	public function pagineAsWidgetThreeColumns()
		{
			return $this->hasMany('App\Page','three_columns_widget_id','id');
		}

}
