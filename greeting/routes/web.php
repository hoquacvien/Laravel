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
Route::get('/greeting', function () {
	echo 'abct';
});
Route::get('/login', function () {
	return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
	if ($request->username == 'admin'
		&& $request->password == 'admin') {
		return view('welcome_admin');
	}
	return view('login_error');
});

Route::get('/product', function () {
	return view('product');
});
Route::post('/product', function (Illuminate\Http\Request $request) {
	$description = $request->description;
	$price = $request->price;
	$percent = $request->percent;
	$amount = ($price * $percent * 0.1) / 100;
	$finalprice = $price - $amount;
	return view('tinh', compact(['description', 'price', 'percent', 'amount', 'finalprice']));
});
Route::get('/dich', function () {
	return view('dich');
});
Route::post('/dich', function (Illuminate\Http\Request $request) {
	$dich = $request->dich;
	switch ($dich) {
	case "hello":
		echo "Xin chào";
		break;
	case "bye":
		echo "tạm biệt";
		break;
	case "love":
		echo "tình yêu";
		break;
	}
	return view('dich', compact(['dich']));
});