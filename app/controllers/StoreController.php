<?php

class StoreController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {

		#Make sure Basecontroller construct gets called
		parent::__construct();

		#only logged in users are allowed here
		$this->beforeFilter('auth');
	}
	public function index()
	{
		//query all stores assosiated with this user
		$stores = Store::where('user_id', '=', Auth::id())->get();
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

		$rules = array(
			'store_name' => 'required',
			'location' => 'required',
			'user_id' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('/store/create')->with('falsh_message', 'Oops there were some errors...')->withInput()->withErrors($validator);
		}

		$store = new Store;
		$store->store_name = Input::get('store_name');
		$store->location = Input::get('location');
		$store->user_id = Input::get('user_id');
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
		if($store->user_id == Auth::id()){
			return View::make('store_show')->with('store', $store);
		}
		else{
			return Redirect::to('/store')->with('flash_message', 'store not found');
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
			$store = Store::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/store')->with('flash_message', 'Store not found');
		}
		if($store->user_id == Auth::id()){
			return View::make('store_edit')->with('store', $store);
		}
		else{
			return Redirect::to('/store')->with('flash_message', 'Store not found');
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
			$store = Store::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/store')->with('flash_message', 'Store not found');
		}


		$rules = array(
			'store_name' => 'required',
			'location' => 'required',
			'user_id' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::back()->with('falsh_message', 'Oops there were some errors...')->withInput()->withErrors($validator);
		}

		$store->store_name = Input::get('store_name');
		$store->location = Input::get('location');
		$store->user_id = Input::get('user_id');
		if($store->user_id == Auth::id()){
			$store->save();
			
			return Redirect::action('StoreController@index');
		}
		else{
			return Redirect::to('/store')->with('flash_message', 'Store not found');
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
			$store = Store::findOrFail($id);
		}
		catch(Exception $e){
			return Redirect::to('/store')->with('flash_message', 'Store not found');
		}
		if($store->user_id == Auth::id()){
			//check if this is linked to any instances of food
			$foods = Food::where('user_id', '=', Auth::id())->with('person', 'store')->get();
			foreach ($foods as $food) {
				if($food->store_id == $id){
					$cannot_delete = "Cannot delete this entry- it is associated with at least one instance of a grocery item";
					return Redirect::back()->with('flash_message', 'Cannot delete this entry- it is associated with at least one instance of a grocery item')->withErrors($cannot_delete);;
				}
			}
			Store::destroy($id);

			return Redirect::action('StoreController@index')->with('flash_message', 'Your store has been deleted');
		}
		else{
			return Redirect::to('/store')->with('flash_message', 'Store not found');
		}
	}


}
