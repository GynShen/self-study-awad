<?php

use Illuminate\Support\Facades\Route;

Route::view('/contact', 'contact');

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('welcome');
});
