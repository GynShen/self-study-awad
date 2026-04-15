<?php

use Illuminate\Support\Facades\Route;

Route::get('/{username}', function($username) {
    return view('welcome', ['username' => $username]);
});

Route::view('/contact', 'contact');

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('welcome');
});
