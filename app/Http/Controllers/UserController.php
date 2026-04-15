<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($user)
    {
        echo $user;
        echo ", Hello from UserControllers!";
        echo "\n";
        return ['name' => 'ABC', 'age' => 40];
        // return view('user', ['username' => $username]);
    }

    public function loadView($user)
    {
        return view('user', ['user' => $user]);
    }
}
