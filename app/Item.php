<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

			protected $table = 'items';

			public function user(){
			return $this->belongsTo('App\User');
			}
			
			public function cart(){
			return $this->hasMany('App\Cart');
			}
			
			public function business(){
			return $this->belongsTo('App\Business');
			}

}
