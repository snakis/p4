<?php

class PersonController extends BaseController {


	public function __construct() {

		#Make sure Basecontroller construct gets called
		parent::__construct();

		#only logged in users are allowed here
		$this->beforeFilter('auth');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		//query all persons assosiated with this user
		$persons = Person::where('user_id', '=', Auth::id())->get();
		return View::make('person_index')->with('persons', $persons);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('person_create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = array(
			'name' => 'required',
			'family_role' => 'required',
			'user_id' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('/person/create')->with('falsh_message', 'Oops there were some errors...')->withInput()->withErrors($validator);
		}

		$person = new Person;
		$person->name = Input::get('name');
		$person->family_role = Input::get('family_role');
		$person->user_id = Input::get('user_id');
		$person->save();

		return Redirect::action('PersonController@index')->with('flash_message', 'Your new person as been added.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try{
			$person = Person::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/person')->with('flash_message', 'person not found');
		}
		if($person->user_id == Auth::id()){
			return View::make('person_show')->with('person', $person);
		}
		else{
			return Redirect::to('/person')->with('flash_message', 'person not found');
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{
			$person = Person::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/person')->with('flash_message', 'Person not found');
		}
		if($person->user_id == Auth::id()){
			return View::make('person_edit')->with('person', $person);
		}
		else{
			return Redirect::to('/person')->with('flash_message', 'Person not found');
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		try {
			$person = Person::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/person')->with('flash_message', 'Person not found');
		}

		$rules = array(
			'name' => 'required',
			'family_role' => 'required',
			'user_id' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::back()->with('falsh_message', 'Oops there were some errors...')->withInput()->withErrors($validator);
		}

		$person->name = Input::get('name');
		$person->family_role = Input::get('family_role');
		$person->user_id = Input::get('user_id');

		if($person->user_id == Auth::id()){
			$person->save();
			
			return Redirect::action('PersonController@index');
		}
		else{
			return Redirect::to('/person')->with('flash_message', 'Person not found');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			$person = Person::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/person')->with('flash_message', 'Person not found');
		}
		if($person->user_id == Auth::id()){
			Person::destroy($id);

			return Redirect::action('PersonController@index')->with('flash_message', 'Your person has been deleted');
		}
		else{
			return Redirect::to('/person')->with('flash_message', 'Person not found');
		}
	}


}
