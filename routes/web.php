<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sections.hero');
});
Route::get('/buku', function () {
    return view('sections.books');
});
Route::get('/hadis', function () {
    return view('sections.hadist');
});
Route::get('/result', function () {
    return view('sections.result');
});
