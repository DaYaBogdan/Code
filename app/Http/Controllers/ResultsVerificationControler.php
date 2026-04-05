<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultsRequest;

class ResultsVerificationControler extends Controller
{
    public function submit(ResultsRequest $request) {
        $request->validate([]);
        return view("static.Test");
    }
}
