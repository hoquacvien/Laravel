<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {
	public function index() {
		$posts = Post::all();
		return view('posts.list', compact('posts'));
	}
	public function create() {
		return view('posts.create');
	}
	public function store(Request $request) {
		$posts = new Post();
		$posts->title = $request->input('title');
		$posts->content = $request->input('content');
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = $image->store('image', 'public');
			$posts->image = $path;
		}
		$posts->date = $request->input('date');

		Session::flash('success', 'Tạo mới thành công');
		$posts->save();

		return redirect()->route('posts.index');
	}

	public function edit($id) {
		$post = Post::findOrFail($id);
		return view('posts.edit', compact('post'));
	}

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
}
