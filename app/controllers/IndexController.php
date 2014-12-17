<?php

class IndexController extends BaseController {

	public function __construct(){
		parent::__construct();
	}

public function getIndex(){
	
	if(Auth::check()){
		$redirect_error = "You are already logged in. Please log out first to log into another user.";
		return Redirect::to('/food')->with('flash_message', 'You are already logged in. Please log out first to log in another user.')->withErrors($redirect_error);
				
	}
	else{
		return View::make('index');
	}
}

}
