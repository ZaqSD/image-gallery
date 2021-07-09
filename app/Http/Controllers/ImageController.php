<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id){
        $image = Image::where('id',$id)->first();
        return view('image', [
            'image' => $image,
        ]);
    }

    public function edit($id)
    {
        $image = Image::find( $id );

        return redirect('/content/' .$id);
    }
}
