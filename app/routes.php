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

Event::listen('Larabook.Registration.Events.UserRegistered', function($event)
{
	//dd("send a notification email");
});

Route::get('/',
[
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('register',
[
	'as' => 'register_path',
	'uses' => 'RegistrationController@create'
]);


Route::post('register',
[
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
]);

/**
 * Sessions
 */
Route::get('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@create'
]);

Route::post('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@store'
]);

Route::get('logout', [
	'as' => 'logout_path',
	'uses' => 'SessionsController@destroy'
]);

/**
 * Statues
 */
Route::get('statuses', 'StatusController@index');
