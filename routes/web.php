<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/datatest', [UserController::class, 'testData']);

Route::get('users/{user}', [UserController::class, 'loadView']);

// Route::get('users/{user}', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
    // return redirect('about');
});

Route::view('/contact', 'contact');

Route::get('/about', function () {
    return view('about');
});

// Route::get('/{username}', function($username) {
//     return view('welcome', ['username' => $username]);
// });