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


View::name('layout', 'layout');
$layout = View::of('layout');

Route::get('user/login', 'UserController@login');
Route::post('user/login', 'UserController@register');
Route::post('user/login', 'UserController@authenticate');
Route::get('user/register', 'UserController@register');
Route::post('user/register', 'UserController@validate');

Route::get('main', function() use ($layout){
	 return $layout->nest('content', 'main');
});

//Route::post('main', 'UserController@login');