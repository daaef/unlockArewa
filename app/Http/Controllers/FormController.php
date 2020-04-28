<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\Business;
use App\User;
use App\Cart;
use App\Item;
use Auth;
use Hash;
use Mapper;


use Illuminate\Support\Facades\Input;

class FormController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
					public function index(){
					
					
							$items = Item::all();
							//dd($);
							//echo "fghj"; exit;
							return view('home.home')->with('its',$items);
		
					}
					
					public function allbiz(){
							$a = Business::where('user_id',Auth::user()->id)->get();
					
			
							return view('admin.all_biz')->with('saguy',$a);
		
					}
					
					public function map()
						{
						$auwal = Business::all();
						//Mapper::map(52.381128999999990000, 0.470085000000040000)->informationWindow(53.381128999999990000, -1.470085000000040000, 'jbhnjhmjjkjkhjljlljl;jil;kljlkikijl;jloi;kjoio', ['markers' => ['animation' => 'DROP']]);
    						return view('admin.map3')->with('au',$auwal);
					}
					
					public function searchmap()
						{$skey = input::get('search');
						
						$auwal = Business::with('item')->where('name', 'LIKE', "%$skey%")
								->orWhere('category', 'LIKE', "%$skey%")
								->orWhere('brief_des', 'LIKE', "%$skey%")
								->orWhere('full_des', 'LIKE', "%$skey%")
								->orWhere('website', 'LIKE', "%$skey%")
								->orWhere('phonenumber', 'LIKE', "%$skey%")
								//->orWhere($item->name, 'LIKE', "%$skey%")
								->get();
								
								
						//Mapper::map(52.381128999999990000, 0.470085000000040000)->informationWindow(53.381128999999990000, -1.470085000000040000, 'jbhnjhmjjkjkhjljlljl;jil;kljlkikijl;jloi;kjoio', ['markers' => ['animation' => 'DROP']]);
    						return view('admin.searchmap')->with('au',$auwal);
					}

	
	

	
			public function create(Request $request){ 
	
			$s = new User;
			$s->name = Input::get('first_name')." ".Input::get('last_name');
			$s->email = Input::get('email');
			$s->password = Md5(Input::get('password'));
			$s->save();
			return redirect()->intended('/')->with("msg","You are successfully registered");
			}
			
			public function createBuzz(Request $request){ 
	
			$s = new Business;
			$s->name = Input::get('name');
			$s->category = Input::get('category');
			$s->website = Input::get('website');
			$s->brief_des = Input::get('brief_des');
			$s->full_des = Input::get('full_des');
			$s->phonenumber = Input::get('phonenumber');
			$s->frontimage = Input::get('frontimage');
			$s->save();
			return redirect()->intended('/')->with("msg","Your business is successfully registered");
			}
			
			public function showblog(){
	
				return view('admin.createbuzz');//->with('post', $k)->with('sagir', $sag);
			}
	
			public function showbuss(){
	
				return view('admin.createbuzz');//->with('post', $k)->with('sagir', $sag);
			}
	
	public function register()
	{
	
		return view('admin.register');//->with('post', $k)->with('sagir', $sag);
	}

	/**
	 * Store a newly created resource in storage.	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
