<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function MediaView(){
        $media = User::find($id);

        return view('media',compact());
    }
}
