<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
	return view('home');
});
//tao group route tasks
Route::group(['prefix' => 'post'], function () {
	Route::get('list', 'PostController@index')->name('post.index');
	Route::get('create', 'PostController@create')->name('post.create');
	Route::post('create', 'PostController@store')->name('post.store');
	Route::get('/{id}/edit', 'PostController@edit')->name('post.edit');
	Route::post('/{id}/edit', 'PostController@update')->name('post.update');
	Route::get('/{id}/destroy', 'PostController@destroy')->name('post.destroy');
});