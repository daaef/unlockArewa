<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

			protected $table = 'carts';

			public function user(){
			return $this->belongsTo('App\User');
			}
			
			public function item(){
			return $this->belongsTo('App\Item');
			}

}
