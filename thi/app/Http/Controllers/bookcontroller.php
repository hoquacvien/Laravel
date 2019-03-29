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

		$book->book_name = $request->book_name;
		$book->author_name = $request->author_name;
		$book->description = $request->description;
		$book->published_date = $request->published_date;
		$book->book_quantity = $request->book_quantity;

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
