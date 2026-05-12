<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRedactorAltRequest;

class BlogRedactorCSVController extends Controller
{
    public function getBlogRedactorCSV() {
        return view("static.BlogRedactorCSV");
    }
    public function submit(BlogRedactorAltRequest $request) {
        return redirect()->route('blogRedactorCSV');
    }
}
