<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoControler extends Controller
{
    public function getPhotos()
    {
        $path = 'images/album/';
        $photosAndAuthors = [
            "Street"=>"Mak", 
            "album_2"=>"Sebastian Schuster", 
            "album_3"=>"Yuri Krupenin", 
            "album_4"=>"Tomasz Brengos", 
            "album_5"=>"Alissa Schilling", 
            "album_6"=>"Shana Van Roosbroek", 
            "album_7"=>"Evgeni Tcherkasski", 
            "album_8"=>"Jonas Degener", 
            "album_9"=>"Leongsan", 
            "album_10"=>"Jonny Gios", 
            "album_11"=>"Christian Cueni", 
            "album_12"=>"Emma Swoboda", 
            "album_13"=>"Leongsan", 
            "album_14"=>"Clay Banks"
        ];

        return view('static.Album', compact('path', 'photosAndAuthors'));
    }
}
