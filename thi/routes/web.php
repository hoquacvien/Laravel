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

Route::get('/', 'book_management_controller@showIndexPage')->name('home');

Route::get('book_list', 'book_management_controller@show_book_list')->name('bookList');

Route::get('create_book', 'book_management_controller@create_newBook')->name('createBook');
Route::post('create_book', 'book_management_controller@Store_newBook')->name('storeBook');

Route::get('{id}/show_detail', 'book_management_controller@showDetail')->name('book_Detail');

Route::get('{id}/delete', 'book_management_controller@destroy')->name('delete_book');