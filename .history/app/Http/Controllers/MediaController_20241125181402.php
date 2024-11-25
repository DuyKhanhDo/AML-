<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function MediaView(){
        $media = Media::find('1');

        dump($media->toArray());

        // return view('media',compact('media'));
    }
}
