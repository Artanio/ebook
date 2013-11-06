<?php

// Control de usuarios del sitio 
class UserController extends BaseController{
	// Renderiza el login
	public function login(){
		// renderizamos la vista
		$this->layout->content = View::make('user/login');
	}

	// Renderiza el formulario de registgo
	public function register(){
		$this->layout->content = View::make('user/register');
	}

	// Verifica si el login de usuario es correcto
	public function authenticate(){
		$user = Input::get('user');
		$password = Input::get('pass');
		$data = User::where('username', $user)->where('password', $password)->get(); // parametros . 1 -nombre campo bd, 2 - operador - 3 -comparacion de variable
		if(count($data) > 0 ){
			Session::set('session_user.name', $user);
		}
		else{
			return 'fail';
		}
		
	}

	// Validacion del formulario de registro
	public function validate(){
		$dataUser = Input::all();

		$rules = array(
			'username' => 'required|between:3,10|alpha_num',
			'mail'     => 'required|email',
			'pass'     => 'required|confirmed',
			);
		$msg = array(
			'required' => 'El campo :attribute es requerido',
			'email' => 'El formato del campo :attribute no es valido',
			'confirmed'=> 'El campo :attribute no coincide',
			'alphanumeric' =>'El campo :attribute solo puede contener numero y letras',
			'between' => 'El campo :attribute debe contener entre :min - :max caracteres'
			);

		$validate = Validator::make($dataUser, $rules, $msg);
		if ($validate->fails()) {

			return Redirect::to('user/register')->withErrors($validate);
		}
		else{
			//magia  -> el controlador reconoce el modelo.
			$user = new User;
			$user->username = $dataUser['username'];
			$user->email=$dataUser['mail'];
			$user->password=$dataUser['pass'];
			$user->save();

			return Redirect::to('user/login');
		}
	}

	

}
