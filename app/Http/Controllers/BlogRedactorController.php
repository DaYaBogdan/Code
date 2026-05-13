<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRedactorRequest;
use App\Models\Blog;

class BlogRedactorController extends Controller
{
    public function getBlogRedactor() {
        return view("static.BlogRedactor");
    }
    public function submit(BlogRedactorRequest $request) {
        
        $blog = new Blog($request->only(['title', 'message']));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $blog->image_path = $path;
        }

        $blog->save();
        
        return redirect()->route('blogRedactor');
    }
}
