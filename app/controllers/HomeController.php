<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $layout = 'layout';

	public function index(){

		$tournaments = Tournament::orderBy('id','desc')->take(4)->get();
		$tip = Tip::orderBy('id', 'desc')->first();
		$clubs = Club::orderBy('name')->get();

		return View::make('index',compact('tournaments','tip','clubs'));

	}

}
