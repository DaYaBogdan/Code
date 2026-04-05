<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\FormValidationController;
use App\Http\Controllers\InterestsControler;
use App\Http\Controllers\PhotoControler;
use App\Http\Controllers\ResultsVerificationControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, "index"])->name("home");

Route::get('/About', [BasicController::class, "about"])->name("about");

Route::get('/Interests', [InterestsControler::class, "getInterests"])->name("interests");

Route::get('/album', [PhotoControler::class, 'getPhotos'])->name('album');

Route::get('/Lessons', [BasicController::class, "lessons"])->name("lessons");

Route::get('/Message', [BasicController::class, "message"])->name("message");

Route::get('/Test', [BasicController::class, "test"])->name("test");

Route::post("/Message", [FormValidationController::class, "submit"])->name("message.post");

Route::post("/Test", [ResultsVerificationControler::class, "submit"])->name("test.post");