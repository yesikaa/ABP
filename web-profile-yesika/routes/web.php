<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/experience/{slug}', function ($slug) {
    return view('partials.detail', ['slug' => $slug]);
});