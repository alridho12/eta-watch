<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('/home', function () {
    return view('pages.home.index');
});

Route::get('/about-me', function () {
    return view('pages.about-me.index');
});

Route::get('/kontak', function () {
    return view('pages.kontak.index');
});

Route::get('/katalog', function () {
    return view('pages.katalog.index');
});
