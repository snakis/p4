<?php

class StoreController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {

		#Make sure Basecontroller construct gets called
		parent::__construct();

		#only logged in users are allowed here
		#$this->beforeFilter('auth');
	}
	public function index()
	{
		$stores = Store::all();
		return View::make('store_index')->with('stores', $stores);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('store_create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$store = new Store;
		$store->store_name = Input::get('store_name');
		$store->location = Input::get('location');
		$store->save();

		return Redirect::action('StoreController@index')->with('flash_message', 'Your new store as been added.');
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
			$store = Store::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/store')->with('flash_message', 'store not found');
		}

		return View::make('store_show')->with('store', $store);
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
			$store = Store::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/store')->with('flash_message', 'Store not found');
		}

		return View::make('store_edit')->with('store', $store);
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
			$store = Store::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/store')->with('flash_message', 'Store not found');
		}

		$store->store_name = Input::get('store_name');
		$store->location = Input::get('location');
		$store->save();

		return Redirect::action('StoreController@index');
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
			$store = Store::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/store')->with('flash_message', 'Store not found');
		}
		Store::destroy($id);

		return Redirect::action('StoreController@index')->with('flash_message', 'Your store has been deleted');
	}


}
