<?php

class TournamentsController extends BaseController{

	public function tournamentsIndex(){

		$tournaments = Tournament::orderBy('id','desc')->paginate(6);

		return View::make('tournaments.tournamentsIndex', compact('tournaments'));
	}

	public function showTournamentsCreate(){

		return View::make('tournaments.tournamentsCreate');
	}

	public function doTournamentsCreate(){

		$rules = array(

			'name' => 'required|min:3|max:30',
			'description' => 'required|min:10|max:500',
			'website'=> 'required',
			'location'=>'required'

			 );

		$validator = Validator::make(Input::all(),$rules);

		//Check if website Input already has http://

			if($validator->passes()){

				if(strpos(Input::get('website'), 'http://') == true){

					$website = Input::get('website');
				}

				else{

					$website = "http://".Input::get('website');
				}

			$tournament = new Tournament();

			$tournament->name = ucwords(Input::get('name'));
			$tournament->tournament_start = date('Y-m-d H:i:s',strtotime(Input::get('tournament_begin')));
			$tournament->tournament_end = date('Y-m-d H:i:s',strtotime(Input::get('tournament_end')));
			$tournament->register_start = date('Y-m-d H:i:s',strtotime(Input::get('register_begin')));
			$tournament->register_end = date('Y-m-d H:i:s',strtotime(Input::get('register_end')));
			$tournament->description = Input::get('description');
			$tournament->location = ucwords(Input::get('location'));
			$tournament->website = $website;

			$tournament->save();

			return Redirect::to('tournaments');

		}

		else{

			return Redirect::to('tournaments/new')->withInput()->withErrors($validator);
		}
	}
}