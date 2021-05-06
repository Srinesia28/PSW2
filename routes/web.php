<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanControl;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/pesanan',[MessagesController::class,'index']);
Route::get('/', [HalamanControl::class, 'home']);
Route::get('/catalog',[CatalogController::class,'index']);
Route::get('/add_Produk',[HalamanControl::class,'add_Produk']);

Route::get('login_user',[HalamanControl::class,'login_user']);
Route::get('order',[HalamanControl::class,'order']);
Route::get('/register',[HalamanControl::class,'register']);
Route::get('/about',[HalamanControl::class,'about']);
Route::get('/produk',[ProdukController::class,'index']);

Route::post('/produk',[ProdukController::class,'store']);
Route::post('/pesanan',[MessagesController::class,'store']);
Route::post('/login',[UserController::class,'store']);
Route::post('/postlogin',[LoginController::class,'postlogin']);


//route show
Route::get('/catalog/{product}',[ProdukController::class,'show']);
Route::get('/pesanan/hapus/{id}',[MessagesController::class,'hapus']);
Route::get('/produk/hapus/{id}',[ProdukController::class,'hapus']);
