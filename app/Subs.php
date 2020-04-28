<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subs extends Model {

			protected $table = 'subs';

			public function user(){
			return $this->belongsTo('App\User');
			}
			
			

}
