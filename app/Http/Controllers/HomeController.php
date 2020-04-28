<?php namespace App\Http\Controllers;
use App\Post;
use App\Business;
use App\User;
use App\Cart;
use App\Item;
use Auth;
use Hash;
use Mapper;

class HomeController extends Controller {


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
	public function index()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home');
	}
	
	public function products()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
	$s = Item::all();
		return view('home.products')->with('i', $s)->with('cart',$c);
	}
	
	public function showsearch()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home.search')->with('cart',$c);
	}
	public function showdetail()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home.product_detail')->with('cart',$c);
	}
	
	public function showcontact()
	{
		$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home.contact')->with('cart',$c);
	}
	public function showcart()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
	$s = Cart::where('user_id',Auth::user()->id)->get();
		return view('home.showcart')->with('cart',$c)->with('item',$s);
	}
	
	public function showcheckoutinfo()
	{
		$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home.payment')->with('cart',$c);
	}
	
	public function showack()
	{
		$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home.ack')->with('cart',$c);
	}
	
	public function showabout()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home.about')->with('cart',$c);
	}
	public function showfaq()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home.faq')->with('cart',$c);
	}
	public function showadd()
	{
	$c = Cart::where('user_id', Auth::user()->id)->get();
		return view('home.checkoutinfo')->with('cart',$c);
	}
	
	public function gologin()
	{
		return view('login');
	}
	
	

}
