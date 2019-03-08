<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});
Route::group(['prefix' => 'posts'], function () {
	Route::get('list', 'PostController@index')->name('posts.index');
	Route::get('create', 'PostController@create')->name('posts.create');
	Route::post('create', 'PostController@store')->name('posts.store');
	// Route::get('/{id}/edit', 'PostController@edit')->name('posts.edit');
	// Route::post('/{id}/edit', 'PostController@update')->name('posts.update');
	// Route::get('/{id}/destroy', 'PostController@destroy')->name('posts.destroy');
});