<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFileRequest;
use App\UploadFile;
use File;

class UploadFileController extends Controller {
	public function getAddFile() {
		return view('uploadfile.upload');
	}
	public function postAddFile(UploadFileRequest $request) {
		$file_name = $request->file('uploadfile')->getClientOriginalName();
		$uploadfile = new UploadFile();
		$uploadfile->file = $file_name;
		$request->file('uploadfile')->move('resource/upload/', $file_name);
		$uploadfile->save();
		echo 'thanh cong';
	}
}
