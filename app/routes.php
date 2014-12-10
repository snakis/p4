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
/*
//Index
Route::get('/', 'IndexController@getIndex');

//User (explicit routing)
# Note: the beforeFilter for 'guest' on getSignup and getLogin is handled in the Controller
Route::get('/signup', 'UserController@getSignup');
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', ['before' => 'csrf', 'uses' => 'UserController@postSignup'] );
Route::post('/login', ['before' => 'csrf', 'uses' => 'UserController@postLogin'] );
Route::get('/logout', ['before' => 'auth', 'uses' => 'UserController@getLogout'] );

//Food (implicit RESTful routing)
Route::resource('food', 'FoodController');

//Person (implicit RESTful routing)
Route::resource('person', 'PersonController');

//Store (implicit RESTful routing)
Route::resource('store', 'StoreController');
*/

Route::get('/', function()
{
	return View::make('login');
});

Route::get('/login', function()
{
    return View::make('login');
});

Route::get('/master_list', 'FoodController@getIndex');

//Implicit RESTful Routing
Route::resource('person', 'PersonController');
Route::resource('store', 'StoreController');
Route::resource('food', 'FoodController');
/*
Route::get('/groceries', function()
{
	return View::make('groceries');
});

Route::get('/store', function()
{
	return View::make('store');
});

Route::get('/shopper', function()
{
	return View::make('shopper');
});
*/