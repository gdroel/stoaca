<?php

class UsersController extends BaseController{

	public function showRegister(){

		return View::make('users.register');
	}

	public function doRegister(){

		$user = new User();

		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->role = "coach";

		$user->save();
	}
}