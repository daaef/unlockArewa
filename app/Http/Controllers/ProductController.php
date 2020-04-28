<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\Business;
use App\User;
use App\Subs;
use App\Cart;
use App\Item;
use Auth;
use Hash;
use Mapper;


use Illuminate\Support\Facades\Input;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
					public function newTv(Request $request){
					
					//echo "Alhamdulillah";
					
						$tv = Input::get('tv');
						$amount = Input::get('Boquet');
						$boquet = Input::get('Boquet');
						
						$s = new Subs;
						$s->name = Auth::user()->name;
						$s->save();						
						return view('home.ack')->with('t',$tv)->with('a',$amount)->with('b',$boquet);
					
		
					}
					
					
					public function detail($id){
					
					$s = Item::find($id);
					//$c = Cart::where('user_id', Auth::user()->id)->get();
			
							return view('home.product_detail')->with('item', $s);//->with('cart',$c);
		
					}
					
					public function delete($id){
					
					$s = Item::find($id);
					$s->delete();
			
							return redirect()->back();//('home.product_detail')->with('item', $s);
		
					}
					
					public function addToCart(){
					$id = Input::get('item_id');
					$c = Cart::where('user_id', Auth::user()->id)->get();
					$s = Item::find($id);
					$c = new Cart;
					$c->name		=		$s->name;
					$c->user_id		=		Auth::user()->id;
					$c->owner_name	=		$c->user->name;
					//echo $c->owner; exit;
					$c->owner_name	=		$c->user->name;
					$c->price		=		$s->price;
					
					$c->qty			=		Input::get('qty');
					$c->status		=		"off";
					$c->save();
			
					return view('home.product_detail')->with('item', $s)->with('cart',$c)->with('msg', 'Submitted successfully');
		
					}
					
				

}
