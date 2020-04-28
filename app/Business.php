<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model {

			protected $table = 'Businesses';

			public function user(){
			return $this->belongsTo('App\User');
			}
			
			public function item(){
			return $this->hasMany('App\Item');
			}

}
