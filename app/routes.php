<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('clubs', 'ClubsController@clubsIndex');


Route::get('register','UsersController@showRegister');
Route::post('register','UsersController@doRegister');

Route::get('login', 'UsersController@showLogin');
Route::post('login', 'UsersController@doLogin');
Route::get('logout', 'UsersController@doLogout');

Route::get('tips', 'TipsController@tipsIndex');

Route::get('tips/{id}', 'TipsController@showTip');

Route::get('tournaments', 'tournamentsController@TournamentsIndex');


Route::group(array('before' => 'auth'), function()
{
    Route::get('tips/new', 'TipsController@showTipsCreate');
	Route::post('tips/new', 'TipsController@doTipsCreate');

	Route::get('tournaments/new', 'TournamentsController@showTournamentsCreate');
	Route::post('/tournaments/new', 'TournamentsController@doTournamentsCreate');

	Route::get('clubs/new', 'ClubsController@showClubsCreate');
	Route::post('clubs/new', array('before'=>'new', 'uses'=>'ClubsController@doClubsCreate'));
	Route::post('clubs/edit', 'ClubsController@doClubsEdit');

});