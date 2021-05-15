<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\comment;

class HalamanControl extends Controller{
    public function home(){
        return view('user.home');
    }
    public function about()
    {
        return view('user.about');}
    public function add_Produk()
    {
        return view('admin.add_Produk');
    }

    public function comment()
    {
        $komen=comment::all();
        return view('user.formkomen',['komen'=>$komen]);
    }

    public function catalog(){
        return view('user.catalog');
    }
    public function login_admin(){
        return view('login_admin');
    }
    public function login_user(){
            return view('login_user');
    }
    public function order(){
            return view('user.order');
    }
    public function register(){
        return view('register');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}
