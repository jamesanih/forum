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
		$user = new User([
			'name'=> $request->input('name'),
			'email' => $request->input('email'),
			'password'=> bcrypt($request->input('password'))
		]);
		$user->save();
		Auth::login($user);
		//return redirect()->route('index');
		return redirect()->back();
	}

	//login user
	public function signin(Request $request){
		$this->validateLogin($request);
		if(Auth::attempt(['name'=>$request->input('name'), 'password'=>$request->input('password')])){
			return redirect()->back();
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
    		'name'=>'required|string|max:191',
    		'email'=> 'required|string:email|max:191|unique:users',
    		'password'=> 'required|string|min:6',
    	]);
    }
}
