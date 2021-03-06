<?php
namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller {
	public function index() {
		$tasks = Task::paginate(5);
		return view('tasks.list', compact('tasks'));
	}

	public function create() {
		return view('tasks.create');
	}

	public function store(Request $request) {
		$task = new Task();
		$task->title = $request->input('title');
		$task->content = $request->input('content');

		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = $image->store('images', 'public');
			$task->image = $path;
		}

		$task->due_date = $request->input('due_date');
		$task->save();
		Session::flash('success', 'Tạo mới thành công');

		return redirect()->route('tasks.index');
	}
	public function edit($id) {
		$task = Task::findOrFail($id);
		return view('tasks.edit', compact('task'));
	}

	public function update(Request $request, $id) {
		$task = Task::findOrFail($id);
		$task->title = $request->input('title');
		$task->content = $request->input('content');

		if ($request->hasFile('image')) {

			$currentImg = $task->image;
			if ($currentImg) {
				Storage::delete('/public/' . $currentImg);
			}

			$image = $request->file('image');
			$path = $image->store('images', 'public');
			$task->image = $path;
		}

		$task->due_date = $request->input('due_date');
		$task->save();

		Session::flash('success', 'Cập nhật thành công');
		return redirect()->route('tasks.index');
	}

	public function destroy($id) {
		$task = Task::findOrFail($id);
		$image = $task->image;
		if ($image) {
			Storage::delete('/public/' . $image);
		}

		$task->delete();

		Session::flash('success', 'Xóa thành công');
		return redirect()->route('tasks.index');
	}
}
