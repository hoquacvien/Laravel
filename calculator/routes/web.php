<?php

Route::get('/', 'CalculatorController@index');
Route::post('/calculate', 'CalculatorController@calculate');