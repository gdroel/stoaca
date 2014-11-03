<?php

class ClubsController extends BaseController{

	public function clubsIndex(){

		$clubs = Club::all();
		return View::make('clubs.clubsIndex',compact('clubs'));
	}

	public function showClubsCreate(){

		if(Club::where('user_id',Auth::user()->id)->exists()){

			$club = Club::where('user_id',Auth::user()->id)->first();
		}

		else{

			$club = null;
		}

		return View::make('clubs.clubsCreate', compact('club'));

	}

	public function doClubsCreate(){

		$rules = array(
			'name'=>'required|min:3|max:20',
			'email'=>'email|required',
			'phone'=>'required|digits|size:9',
			'location'=>'required|min:2|max:20',
			'coach'=>'required|min:2|max:20',
			'website'=>'url'
			);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->passes()){
			$club = new Club();

			$club->name = Input::get('name');
			$club->email = Input::get('email');
			$club->phone = Input::get('phone');
			$club->location = Input::get('location');
			$club->coach = Input::get('coach');
			$club->website = Input::get('website');
			$club->user_id = Input::get('user_id');

			$club->save();

			return Redirect::to('clubs');
		}

		else{

			return Redirect::to('clubs/new')->withInput()->withErrors($validator);
		}

	}

	public function doClubsEdit(){

		$rules = array(
			'name'=>'required|min:3|max:20',
			'email'=>'email|required',
			'phone'=>'required|digits:9|size:9',
			'location'=>'required|min:2|max:20',
			'coach'=>'required|min:2|max:20',
			'website'=>'url'
			);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->passes()){

			$club = Club::where('user_id',Input::get('user_id'))->first();

			$club->name = Input::get('name');
			$club->email = Input::get('email');
			$club->phone = Input::get('phone');
			$club->location = Input::get('location');
			$club->coach = Input::get('coach');
			$club->website = Input::get('website');
			$club->user_id = Input::get('user_id');

			$club->save();

			return Redirect::to('clubs');
		}

		else{

			return Redirect::to('clubs/new')->withInput()->withErrors($validator);
		}
	}



}