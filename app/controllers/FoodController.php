<?php

class FoodController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{

	}


	/**
	 * Show the form for creating a new item
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		//$persons = People::getIdNamePair();
		//return View::make('master_list')->with('persons', $persons);
		return View::make('master_list');
	}

		/**
	 * Process the "Add an item form"
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		#Instantiate the food model
		$food = new Food();

		$food->fill(Input::all());
		$food->save();

		#Magic: Eloquent
		$food->save();

		return Redirect::action('FoodController@getIndex')->with('flash_message', 'Your item has been added.');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
