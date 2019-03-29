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

Route::get('/', 'bookcontroller@showIndexPage')->name('home');

Route::get('book_list', 'bookcontroller@show_book_list')->name('bookList');

Route::get('create_book', 'bookcontroller@create_newBook')->name('createBook');
Route::post('create_book', 'bookcontroller@Store_newBook')->name('storeBook');

Route::get('{id}/show_detail', 'bookcontroller@showDetail')->name('book_Detail');

Route::get('{id}/delete', 'bookcontroller@destroy')->name('delete_book');