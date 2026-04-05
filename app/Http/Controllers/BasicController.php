<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index() {
        return view("static.Home");
    }
    public function about() {
        return view("static.About");
    }
    public function interests() {
        return view("static.Interests");
    }
    public function album() {
        return view("static.Album");
    }
    public function lessons() {
        return view("static.Lessons");
    }
    public function message() {
        return view("static.Message");
    }
    public function test() {
        return view("static.Test");
    }
}
