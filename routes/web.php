<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("static.Home");
});

Route::get('/About', function () {
    return view("static.About");
});

Route::get('/Interests', function () {
    return view("static.Interests");
});

Route::get('/Album', function () {
    return view("static.Album");
});

Route::get('/Lessons', function () {
    return view("static.Lessons");
});

Route::get('/Message', function () {
    return view("static.Message");
});

Route::get('/Test', function () {
    return view("static.Test");
});

Route::get('/History', function () {
    return view("static.History");
});