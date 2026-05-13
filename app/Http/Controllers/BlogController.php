<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function getBlog() {
        $blog = DB::table('blogs')->get();
        return view("static.Blog", ['blog' => $blog]);
    }
}
