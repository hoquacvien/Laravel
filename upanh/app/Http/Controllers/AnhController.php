<?php

namespace App\Http\Controllers;

use App\Anh;
use Illuminate\Http\Request;

class AnhController extends Controller {
	public function create() {
		$anh = Anh::all();
		return view('create');
	}
	public function store(Request $request) {
		$anh = new Anh();
		// echo $request->hasFile('image');
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = $image->store('images', 'public');
			$anh->anh = $path;
		}
		$anh->save();
		return view('index');
	}
}
