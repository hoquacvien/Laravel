<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class bookcontroller extends Controller {

	public function showIndexPage() {
		return view('index');
	}

	public function show_book_list() {
		$book = Books::all();
		return view('bookList', compact('book'));
	}

	public function create_newBook() {
		return view('Insert_book');
	}

	public function Store_newBook(Request $request) {
		$book = new Books();

		$book->tensach = $request->tensach;
		$book->tentacgia = $request->tentacgia;
		$book->mota = $request->mota;
		$book->date = $request->date;
		$book->soluong = $request->soluong;

		$book->save();
		return redirect()->route('bookList');
	}

	public function showDetail($id) {
		$book = Books::findOrFail($id);
		return view('bookDetail', compact('book'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$book = Books::findOrFail($id);
		$book->delete();
		return redirect()->back();
	}
}
