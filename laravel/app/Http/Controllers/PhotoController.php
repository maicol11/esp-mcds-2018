<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PhotoRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\Photo;
use Auth;

use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function create(){
        return view('photos.create');
    }

    public function store(PhotoRequest $request){
        $photo = new Photo;
        if ($request->hasFile('photo')) {
            $url = Storage::put('/photos', $request->file('photo'));
            $photo->url = $url;
        }
        $photo->description = $request->get('description');
        $photo->user()->associate(Auth::user()->id);

        if ($photo->save()) {
            // return redirect('home')->with("Exito", $message);
        }
    }
}
