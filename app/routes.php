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

Route::get('/', function()
{
	return View::make('hello');
});


Route::resource('settings', 'SettingsController');

Route::resource('profiles', 'ProfilesController');

Route::resource('actions', 'ActionsController');

Route::resource('profile_actions', 'Profile_actionsController');

Route::resource('users', 'UsersController');