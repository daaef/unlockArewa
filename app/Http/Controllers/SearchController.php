<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\Business;
use App\User;
use App\Item;
use Auth;
use Hash;
use Mapper;


use Illuminate\Support\Facades\Input;

			class SearchController extends Controller {

		public function search(){
			$skey=Input::get('search');
			
			$s=Item::where('name', 'LIKE', "%$skey%")->orWhere('price', 'LIKE', "%$skey%")
			->orWhere('category', 'LIKE', "%$skey%")
			->orWhere('brief_desc', 'LIKE', "%$skey%")
			->orWhere('full_desc', 'LIKE', "%$skey%")
			->orWhere('qty', 'LIKE', "%$skey%")->get();
			
			if(count($s)<1){
			return view('home.search_empty')->with('key',$skey)->with('amount', count($s))
			->with('saguy', $s);
			}
			else{
			//pr($s, true);
			return view('home.search')->with('key',$skey)->with('amount', count($s))
			->with('saguy', $s);
			}
						
		}
					
				

		}
