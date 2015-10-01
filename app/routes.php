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


Route::group(array('before' => 'auth'), function(){

	Route::resource('settings', 'SettingsController');
	Route::resource('profiles', 'ProfilesController');
	Route::resource('actions', 'ActionsController');
	Route::resource('profile_actions', 'Profile_actionsController');
	Route::resource('users', 'UsersController');

	Route::get('access_denied', function(){
		return View::make('access_denied');
	});	
});

Route::controller('/', 'HomeController');
