<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
	protected $table = "bu";
	protected $fillable = [

		'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type', 'bu_small_dis', 'bu_meta', 'bu_langtuide', 'bu_latitude', 'bu_large_dis', 'bu_status', 'user_id' ,'bu_rooms' ,'bu_place' , 'img' , 'month' , 'year' ,'phone'


	]; 
	public function User()
	{
		return $this->belongsTo('App\User');
	}
	public function PresentPrice()
	{
		 return '$' . number_format($this->bu_price);
	}
}
