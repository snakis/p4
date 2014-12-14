<?php

class FoodController extends \BaseController {


	public function __construct() {

		#Make sure Basecontroller construct gets called
		parent::__construct();

		#only logged in users are allowed here
		#$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$foods = Food::with('person', 'store')->get();
		$persons = Person::getIdNamePair();
		$stores = Store::getIdNamePair();
		return View::make('food_index')->with('foods', $foods)->with('persons', $persons)->with('stores', $stores);
	}


	/**
	 * Show the form for creating a new item
	 *
	 * @return Response
	 */
	public function create()
	{
		$persons = Person::getIdNamePair();
		$stores = Store::getIdNamePair();
		return View::make('food_create')->with('persons', $persons)->with('stores', $stores);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$food = new Food;
		$food->food_type = Input::get('food_type');
		$food->units = Input::get('units');
		$food->amount = Input::get('amount');
		$food->person_id = Input::get('person_id');
		$food->store_id = Input::get('store_id');
		$food->purchased = Input::get('purchased');
		$food->save();


		return Redirect::action('FoodController@index')->with('flash_message', 'Your item has been added');
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
			$food = Food::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/food')->with('flash_message', 'food not found');
		}

		return View::make('food_show')->with('food', $food);
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
			$food = Food::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/food')->with('flash_message', 'Food not found');
		}
		
		$persons = Person::getIdNamePair();
		$stores = Store::getIdNamePair();
		return View::make('food_edit')->with('food', $food)->with('persons', $persons)->with('stores', $stores);
;
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
			$food = Food::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/food')->with('flash_message', 'Food not found');
		}

		$food->food_type = Input::get('food_type');
		$food->units = Input::get('units');
		$food->amount = Input::get('amount');
		$food->person_id = Input::get('person_id');
		$food->store_id = Input::get('store_id');
		$food->purchased = Input::get('purchased');
		$food->save();

		return Redirect::action('FoodController@index')->with('flash_message', 'Your changes have been saved');
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
			$food = Food::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/food')->with('flash_message', 'Food not found');
		}
		Food::destroy($id);

		//return 1;
		return Redirect::action('FoodController@index')->with('flash_message', 'Your item has been deleted');
	}


}
