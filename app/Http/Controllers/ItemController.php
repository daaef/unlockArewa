<?php namespace App\Http\Controllers;
use App\Post;
use App\Business;
use App\User;
use App\Cart;
use App\Item;
use Auth;
use Hash;
use Mapper;

class ItemController extends Controller {


	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	
	
	public function itemlist()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
	$i = Item::where('user_id', Auth::user()->id)->get();
	$s = Item::all();
		return view('admin.itemlist')->with('i', $s)->with('cart',$c)->with('saguy',$i);
	}
	
	public function orderlist()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
	$i = Item::where('user_id', Auth::user()->id)->get();
	$s = Item::all();
		return view('admin.orderlist')->with('i', $s)->with('cart',$c)->with('saguy',$i);
	}
	
	public function received()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
	$i = Item::where('user_id', Auth::user()->id)->get();
	$s = Item::all();
		return view('admin.received')->with('i', $s)->with('cart',$c)->with('saguy',$i);
	}
	
	
	
	

}
