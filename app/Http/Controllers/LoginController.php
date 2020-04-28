<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

use Auth;



use Illuminate\Support\Facades\Input;

class LoginController extends Controller {

public function postme()
	{
		return view('post');
	}
	
	public function logout()
	{
		Auth::logout();
	}


		public function showlogin(){
		
		
		return view('login');
		}
		
		
		public function login(){
		$email = Input::get('email');
		$password = Input::get('password');
		//echo $email.$password; exit;
		if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->intended('/');
        }
		else{
		echo "erooorrr";
		}
		}
		
		public function signup(Request $request){
		
		$s = new User;
			$s->name = Input::get('name');
			$s->email = Input::get('email');
			
			$s->phonenumber = Input::get('phonenumber');
			$s->address = Input::get('address');
			$s->password = Hash::make(Input::get('password'));
	return redirect()->intended('login')->with('msg','Account Created Successsfully');
		$s->save();
		
		}
		
		public function post(){
		dd(Input::all());
		//$name = Input::get('name');
		//echo $name;
		
		}

}