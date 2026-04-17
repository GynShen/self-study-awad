<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::post('/login', [UserController::class, 'login']);
Route::view('/login', 'login');

Route::get('/getUser', [UserController::class, 'getUser']);

Route::get('/getCompany', [UserController::class, 'getCompany']);

Route::post('/signUp', [UserController::class, 'signUp']);
Route::view('/signUp', 'signUp');

Route::post('updateUser', [UserController::class, 'storeUser']);
Route::get('updateUser/{id}', [UserController::class, 'updateUser']);

Route::get('deleteUser/{id}', [UserController::class, 'deleteUser']);

Route::post('/addUser', [UserController::class, 'addUser']);
Route::get('/addUser', function () {
    return view('addUser');
});

Route::get('/datatest', [UserController::class, 'testData']);

// Route::get('users/{user}', [UserController::class, 'loadView']);

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
