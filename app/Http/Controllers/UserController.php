<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function loginuser()
    {
        return view('loginuser');
    }

    public function register()
    {
        return view('register');
    }

    public function order()
    {
        return view('order');
    }

    
}
