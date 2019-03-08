<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anh;
use Illuminate\Support\Facades\Storage;

class AnhController extends Controller
{
    public function upload(Request $request){
        $anh = new Anh();

        //upload file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $anh->image = $path;
        }
        else{
            $anh->image ="";
        }

        $anh->save();
        return redirect()->route('welcome');
    }

    public function index(){
        $anhs = Anh::all();

        return view('welcome', compact('anhs'));
    }

}
