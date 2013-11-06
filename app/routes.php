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

// le decimos a que url tiene acceso el metodo

Route::get('user/login', 'UserController@login');
Route::post('user/login', 'UserController@authenticate');
Route::post('user/logout', 'UserController@logout');  // estoes por que el link_to_action manda por post
Route::get('user/logout', 'UserController@logout');	  // y esto es cuando se clickea el link logout


Route::get('user/register', 'UserController@register');
Route::post('user/register', 'UserController@validate');


Route::get('main', function() use ($layout){
	if(Session::has('session_user.logged')){
	 return $layout->nest('content', 'main');
	}
	else{
		Session::flash('msg', 'Debes estar autenticado para ingresar a este contenido.');
		return Redirect::to('user/login'); 
	}
});

//Route::post('main', 'UserController@login');