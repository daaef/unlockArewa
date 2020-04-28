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
use Image;


use Illuminate\Support\Facades\Input;

     class StoreController extends Controller {
	 
	 public function getNewFileName(){	
				
				//pr(Input::all(), true);
			
				$ext = Input::file('img')->getClientOriginalExtension();

				$str = str_replace("/", "_", Input::get('img'));			
				$newname = strtolower($str.'_' . time().'_'.md5(Input::file('img')->getClientOriginalName()) .'.' . $ext);	
				
				$ct = Item::where('main_image', $newname)->count();	//check for duplicates...			
				if($ct > 0){
					$this->getNewFileName();
				}					
				return $newname;
				}
				
				
				public function getNewFileName2(){	
				
				//pr(Input::all(), true);
			
				$ext = Input::file('img2')->getClientOriginalExtension();

				$str = str_replace("/", "_", Input::get('img2'));			
				$newname = strtolower($str.'_' . time().'_'.md5(Input::file('img2')->getClientOriginalName()) .'.' . $ext);	
				
				$ct = Item::where('image1', $newname)->count();	//check for duplicates...			
				if($ct > 0){
					$this->getNewFileName();
				}					
				return $newname;
				}
				
				public function getNewFileName3(){	
				
				//pr(Input::all(), true);
			
				$ext = Input::file('img3')->getClientOriginalExtension();

				$str = str_replace("/", "_", Input::get('img3'));			
				$newname = strtolower($str.'_' . time().'_'.md5(Input::file('img3')->getClientOriginalName()) .'.' . $ext);	
				
				$ct = Item::where('image3', $newname)->count();	//check for duplicates...			
				if($ct > 0){
					$this->getNewFileName();
				}					
				return $newname;
				}
				
				
				
				public function getNewFileName4(){	
				
				//pr(Input::all(), true);
			
				$ext = Input::file('img3')->getClientOriginalExtension();

				$str = str_replace("/", "_", Input::get('img4'));			
				$newname = strtolower($str.'_' . time().'_'.md5(Input::file('img4')->getClientOriginalName()) .'.' . $ext);	
				
				$ct = Item::where('image3', $newname)->count();	//check for duplicates...			
				if($ct > 0){
					$this->getNewFileName();
				}					
				return $newname;
				}
				
				public function getNewFileName5(){	
				
				//pr(Input::all(), true);
			
				$ext = Input::file('img5')->getClientOriginalExtension();

				$str = str_replace("/", "_", Input::get('img5'));			
				$newname = strtolower($str.'_' . time().'_'.md5(Input::file('img5')->getClientOriginalName()) .'.' . $ext);	
				
				$ct = Item::where('image5', $newname)->count();	//check for duplicates...			
				if($ct > 0){
					$this->getNewFileName();
				}					
				return $newname;
				}
				


			public function index(){
			
							return view('home.home');
		
			}					
					
			
			public function createitem(Request $request){ 
			
			$newFileName = $this->getNewFileName();
			
			//$destinationPath = '/public/uploads';
			//$upl = Input::file('img')->move($destinationPath, $newFileName);
			$upl=$request->file('img')->move( base_path() . '/public/uploads', $newFileName);
			
			//Image::make(Input::file('img'))->resize(300, 200)->save('foo.jpg');
			/*
			if($upl){
			    $newpath = 'public/uploads/'.$newFileName;
				$img = Image::make('public/uploads/'.$newFileName);
				$img->save($newpath);
				$i = Image::make(sprintf('public/uploads', $newFileName))->resize(70, 84)->save();
				
			}
		   	*/
			$s = new Item;
			$s->name = Input::get('name');
			$s->category = Input::get('category');
			$s->brief_desc = Input::get('brief_des');
			$s->full_desc = Input::get('full_des');
			$s->price = Input::get('price');
			$s->qty = Input::get('qty');
			$s->main_image = $newFileName;
			$s->image1 = Input::get('image1');
			$s->image2 = Input::get('image2');
			$s->image3 = Input::get('image3');
			$s->image4 = Input::get('image4');
			$s->image5 = Input::get('image5');
			$s->save();
			return redirect()->intended('/')->with("msg","Your item is successfully registered");
			}
			
			
			public function showitem(){
	
				return view('admin.store_createitem');//->with('post', $k)->with('sagir', $sag);
			}
	
			public function showtest(){
			
						return view('admin.showtest');//->with('post', $k)->with('sagir', $sag);
					}
	
	
	 
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
