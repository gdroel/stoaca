<?php

class TournamentsController extends BaseController{

	public function tournamentsIndex(){

		$tournaments = Tournament::all();

		return View::make('tournaments.tournamentsIndex', compact('tournaments'));
	}

	public function showTournamentsCreate(){

		return View::make('tournaments.tournamentsCreate');
	}

	public function doTournamentsCreate(){

		$tournament = new Tournament();

		$tournament->name = Input::get('name');
		$tournament->tournament_start = date('Y-m-d H:i:s',strtotime(Input::get('tournament_begin')));
		$tournament->tournament_end = date('Y-m-d H:i:s',strtotime(Input::get('tournament_end')));
		$tournament->register_start = date('Y-m-d H:i:s',strtotime(Input::get('register_begin')));
		$tournament->register_end = date('Y-m-d H:i:s',strtotime(Input::get('register_end')));
		$tournament->description = Input::get('description');
		$tournament->location = Input::get('location');
		$tournament->website = Input::get('website');

		$tournament->save();

		return Redirect::to('tournaments');
	}
}