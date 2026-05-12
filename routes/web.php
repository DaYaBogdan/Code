<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogRedactorController;
use App\Http\Controllers\BlogRedactorCSVController;
use App\Http\Controllers\FormValidationController;
use App\Http\Controllers\GuestBookController;
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

Route::post("/Message", [FormValidationController::class, "submit"])->name("message.post");

Route::get('/Test', [BasicController::class, "test"])->name("test");

Route::post("/Test", [ResultsVerificationControler::class, "submit"])->name("test.post");

Route::get('/GuestBook', [GuestBookController::class, "getGuestbook"])->name("guestbook");

Route::post('/GuestBook', [GuestBookController::class, "submit"])->name("guestbook.post");

Route::get('/Blog', [BlogController::class, "getBlog"])->name("blog");

Route::get('/BlogRedactor', [BlogRedactorController::class, "getBlogRedactor"])->name("blogRedactor");

Route::post('/BlogRedactor', [BlogRedactorController::class, "submit"])->name("blogRedactor.post");

Route::get('/BlogRedactorCSV', [BlogRedactorCSVController::class, "getBlogRedactorCSV"])->name("blogRedactorCSV");

Route::post('/BlogRedactorCSV', [BlogRedactorCSVController::class, "submit"])->name("blogRedactorCSV.import");
