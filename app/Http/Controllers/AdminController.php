<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginadmin()
    {
        return view('loginadmin');
    }

    public function adminview()
    {
        return view('adminview');
    }

    public function addproduk()
    {
        return view('addproduk');
    }

    public function pesanan()
    {
        return view('pesanan');
    }
}
