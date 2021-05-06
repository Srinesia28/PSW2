<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HalamanControl extends Controller{
    public function home(){
        
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function add_Produk()
    {
        return view('add_Produk');
    }

    public function catalog(){
        return view('catalog');
    }
    public function login_admin(){
        return view('login_admin');
    }
    public function login_user(){
            return view('login_user');
    }
    public function order(){
            return view('order');
    }
    public function register(){
        return view('register');
    }

}
