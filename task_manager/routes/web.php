<?php
Route::get('/', function () {
	return view('welcome');
});
Route::prefix('customer')->group(function () {
	Route::get('index', 'CustomerController@index');
	Route::get('add', 'CustomerController@add');
	Route::post('add', 'CustomerController@store');
	Route::get('show/{id}', 'CustomerController@show');
	Route::post('edit/{id}', 'CustomerController@update');
	Route::get('edit/{id}', 'CustomerController@edit');
	Route::get('index/{id}', 'CustomerController@delete');
});