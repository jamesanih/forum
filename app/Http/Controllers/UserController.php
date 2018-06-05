<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
	//register user and login them in
	public function register(Request $request){
		$this->validateRegistration($request);

		//print_r($request->all()) ;

		$password = $request->input('password');
		$confirmpassword = $request->input('confpassword');
		$path = 'profilePix';

		//$ageChecker = $this->ageChecker();

		if($request->input('age') < 18 ){
			return view('Auth.register')->with(['message'=> 'password does not match']);
		}else{



		if ($password != $confirmpassword) {
			return view('Auth.register')->with(['message'=> 'password does not match']);
		}else{

			if ($request->hasFile('image')) {
				$image = $request->file('image');
				$filename = $image->getClientOriginalName();
				 $new_filename = time(). "_" .$filename;
				$user = new User();
				$user->email = $request->input('email');
				$user->password = bcrypt($request->input('password'));
				$user->fname = $request->input('fname');
				$user->lname = $request->input('lname');
				$user->username = $request->input('username');
				$user->image = $new_filename;
				$user->age = $request->input('age');
				$user->state = $request->input('state');
				$user->nationality = $request->input('nationality');
				$user->location = $request->input('location');
				$user->phonenumber = $request->input('phonenumber');

				if ($user->save()) {
					$image->move($path, $new_filename);
					return redirect()->route('login');
				}

			}else{
				$user = new User();
				$user->email = $request->input('email');
				$user->fname = $request->input('fname');
				$user->lname = $request->input('lname');
				$user->username = $request->input('username');
				$user->password = bcrypt($request->input('password'));
				//$user->image = $new_filename;
				$user->age = $request->input('age');
				$user->state = $request->input('state');
				$user->nationality = $request->input('nationality');
				$user->location = $request->input('location');
				$user->phonenumber = $request->input('phonenumber');

				if ($user->save()) {
					return redirect()->route('login');
				}

			}
			
		
	}

		}


		
}

	//login user
	public function signin(Request $request){
		//$this->validateLogin($request);
		if(Auth::attempt(['username'=>$request->input('username'), 'password'=>$request->input('password')])){
			return redirect()->back();
		}
		return redirect()->back();
	}

	//used when login user from login page
	public function loginPage(Request $request){
		//$this->validateLogin($request);
		if(Auth::attempt(['username'=>$request->input('username'), 'password'=>$request->input('password')])){
			return redirect()->route('index');
		}
		return redirect()->back();
	}


	public function Logout(){
		Auth::logout();
    	return redirect()->route('index');
	}

    protected function validateLogin(Request $request){
    	$this->validate($request, [
    		'name'=>'required|string',
    		'password'=> 'required|string',
    	]);
    }

    protected function validateRegistration(Request $request){
    	$this->validate($request, [
    		'fname'=>'required|string|max:191',
    		'lname'=>'required|string|max:191',
    		'username'=>'required|string|max:191',
    		'email'=> 'required|string:email|max:191|unique:users',
    		'password'=> 'required|string|min:6',
    		'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
    }

    protected function ageChecker(Request $request){
    	$age = $request->input('age');
    	if($age < "18"){
    		return "false";
    	}
    }
}
