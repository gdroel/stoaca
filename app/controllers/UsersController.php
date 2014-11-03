<?php

class UsersController extends BaseController{

	public function showRegister(){

		return View::make('users.register');
	}

	public function doRegister(){

		$rules = array(
			'first_name'=>'required|alpha|min:2|max:20',
			'last_name'=>'required|alpha|min:2|max:20',
			'email'=>'required|email',
			'password'=>'required|min:6|max:20'
			);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->passes()){

			$user = new User();

			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->role = "coach";

			$user->save();

			return Redirect::to('/');

		}

		else{

			return Redirect::to('register')->withInput()->withErrors($validator);
		}
	}

	public function showLogin(){

		return View::make('users.login');
	}

	public function doLogin(){

				
		$rules = array(
			'email'    => 'required|email', 
			'password' => 'required|alphaNum|min:3' 
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) 
				->withInput(Input::except('password')); 
		} else {
		
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			if (Auth::attempt($userdata, true)) {

				return Redirect::to('/');

			} else {	 	

				return Redirect::to('login');

			}

		}
	}

	public function doLogout(){

		Auth::logout();
		return Redirect::to('/');
	}
}