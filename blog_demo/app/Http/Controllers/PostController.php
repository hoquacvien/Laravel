<?php
namespace App\Http\Controllers;
use App\Post;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {
	public function index() {
		$post = Post::all();
		return view('post.list', compact('post'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view('post.create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request) {
		$post = new Post();
		$post->title = $request->input('title');
		$post->content = $request->input('content');
		//upload file
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = $image->store('image', 'public');
			$post->image = $path;
		}

		$post->date = $request->input('date');
		$post->save();
		//dung session de dua ra thong bao
		Session::flash('success', 'Tạo mới thành công');
		// tao moi xong quay ve trang danh sach task
		return redirect()->route('post.index');
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$post = Post::findOrFail($id);
		return view('post.edit', compact('post'));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		$post = Post::findOrFail($id);
		$post->title = $request->input('title');
		$post->content = $request->input('content');
		//cap nhat anh
		if ($request->hasFile('image')) {
			//xoa anh cu neu co
			$currentImg = $post->image;
			if ($currentImg) {
				Storage::delete('/public/' . $currentImg);}
			$image = $request->file('image');
			$path = $image->store('images', 'public');
			$post->image = $path;
			// cap nhat anh moi

		}
		$post->date = $request->input('date');
		$post->save();
		//dung session de dua ra thong bao
		Session::flash('success', 'Cập nhật thành công');
		//tao moi xong quay ve trang danh sach task
		return redirect()->route('post.index');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$post = Post::findOrFail($id);
		$image = $post->image;
		//delete image
		if ($image) {
			Storage::delete('/public/' . $image);
		}
		$post->delete();
		//dung session de dua ra thong bao
		Session::flash('success', 'Xóa thành công');
		//xoa xong quay ve trang danh sach task
		return redirect()->route('post.index');
	}
}