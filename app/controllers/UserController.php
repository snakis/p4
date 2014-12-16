<?php

class UserController extends BaseController {

	public function __construct() {
		parent::__construct();

		$this->beforeFilter('guest',
			array(
				'only' => array('getLogin', 'getSignup')
				));
	}

	public function getSignup(){
		return View::make('signup');
	}

	public function postSignup(){
		$rules = array(
				'email' => 'required|email|unique:users,email',
				'password' => 'required|min:4'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('/signup')->with('falsh_message', 'Oops there were some errors...')->withInput()->withErrors($validator);
		}

		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		try{
			$user->save();
		}
		catch (Exception $e) {
			return Redirect::to('/signup')->with('flash_message', 'Sign up failed- please try again')->withInput();
		}

		Auth::login($user);

		return Redirect::to('/food')->with('falsh_message', 'Welcome to the Grocery Shopping App');

	}

	public function getLogin() {
		return View::make('login');
	}


	public function postLogin() {
		$credentials = Input::only('email', 'password');

		if(Auth::attempt($credentials, $remember=false)) {
			return Redirect::intended('/food')->with('flash_message', 'Welcome back!');
		}
		else {
			return Redirect::to('/login')->with('falsh_message', 'Login failed- please try again')->withInput();
		}
	}

	public function getLogout() {
		Auth::logout();

		return Redirect::to('/');
	}

}
