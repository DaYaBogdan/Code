<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRedactorRequest;

class BlogRedactorController extends Controller
{
    public function getBlogRedactor() {
        return view("static.BlogRedactor");
    }
    public function submit(BlogRedactorRequest $request) {
        
        
        return redirect()->route('blogRedactor');
    }
}
