<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoControler extends Controller
{
    public function getPhotos()
    {
        $path = 'images/'; // папка в public
        $photosAndAuthors = [
            "album_1"=>"stmh", 
            "album_2"=>"stmh", 
            "album_3"=>"stmh", 
            "album_4"=>"stmh", 
            "album_5"=>"stmh", 
            "album_6"=>"stmh", 
            "album_7"=>"stmh", 
            "album_8"=>"stmh", 
            "album_9"=>"stmh", 
            "album_10"=>"stmh", 
            "album_11"=>"stmh", 
            "album_12"=>"stmh", 
            "album_13"=>"stmh", 
            "album_14"=>"stmh"
        ];

        return view('static.Album', compact('path', 'photosAndAuthors'));
    }
}
