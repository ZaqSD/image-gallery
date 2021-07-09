<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManagerStatic as Intervention;

class HomeController extends Controller
{
    public function index(){

        $images = DB::table('images')
                ->orderBy('created_at', 'desc')
                ->get();

        return view( 'home', [
            'images' => $images,
        ] );
    }

    public function upload(Request $request){

        $title = $request->upTitle;
        $type = $request->upFileType;
        $filename = bcrypt($title);
        $guessExtension = $request->file('file')->guessExtension();
        $content = new Image;

        if($type == 'v'){
            $path = $request->file('file')->storeAs('/public/content/vid', $filename. '.' .$guessExtension);
            $content->type = 'v';
        } else {
            $file = $request->file('file')->storeAs('/public/content/img', $filename.'.'.$guessExtension);
            $content->type = 'p';
        }

        $content->title = $title;
        $content->filename = $filename.'.'.$guessExtension;
        $content->save();

        return redirect('/');
    }
}