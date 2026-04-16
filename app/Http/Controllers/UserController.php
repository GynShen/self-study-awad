<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function testData()
    {
        return DB::select("select * from users");
    }

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
        // return view('user', ['user' => $user]);
        $data = ['Alice', 'Isla', 'Ali'];
        return view('user', ['user' => $user, 'users' => $data]);
    }
}
