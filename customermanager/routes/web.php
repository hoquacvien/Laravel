	<?php

Route::get('/', function () {
	return view('welcome');
});
Route::group(['prefix' => 'customers'], function () {
	Route::get('/', 'CustomerController@index')->name('customers.index');
});