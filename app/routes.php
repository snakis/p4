<?php

Route::get('/', 'IndexController@getIndex');

//User (explicit routing)
# Note: the beforeFilter for 'guest' on getSignup and getLogin is handled in the Controller
Route::get('/signup', 'UserController@getSignup');
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', ['before' => 'csrf', 'uses' => 'UserController@postSignup'] );
Route::post('/login', ['before' => 'csrf', 'uses' => 'UserController@postLogin'] );
Route::get('/logout', ['before' => 'auth', 'uses' => 'UserController@getLogout'] );

//Implicit RESTful Routing
Route::resource('person', 'PersonController');
Route::resource('store', 'StoreController');
Route::resource('food', 'FoodController');
