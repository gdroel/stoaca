<?php

class ClubsController extends BaseController{

	public function clubsIndex(){

		$clubs = Club::all();
		return View::make('clubs.clubsIndex',compact('clubs'));
	}

	public function showClubsCreate(){

		return View::make('clubs.clubsCreate');
	}

	public function doClubsCreate(){

		$club = new Club();

		$club->name = Input::get('name');
		$club->email = Input::get('email');
		$club->phone = Input::get('phone');
		$club->location = Input::get('location');
		$club->coach = Input::get('coach');
		$club->website = Input::get('website');

		$club->save();

		return Redirect::to('clubs');

	}
}