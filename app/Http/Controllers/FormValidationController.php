<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;

class FormValidationController extends Controller
{
    public function submit(MessageRequest $request) {
        $request->validate([]);
        return view("static.Message");
    }
}
