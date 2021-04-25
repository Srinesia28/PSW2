<?php

use Illuminate\Support\Facades\Route;
/* 
Abram Wirayuda Pane
11420042
DIV-TRPL
*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//user
Route::get('/', 'UserController@home');
Route::get('/catalog', 'UserController@catalog');
Route::get('/login1', 'UserController@loginuser');
Route::get('/register', 'UserController@register');
Route::get('/order', 'UserController@order');

//admin
Route::get('/login2', 'UserController@loginadmin');
Route::get('/adminview', 'UserController@adminview');
Route::get('/addproduk', 'UserController@addproduk');
Route::get('/pesanan', 'UserController@pesanan');





