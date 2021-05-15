<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanControl;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HalamanControl::class, 'home']);
Route::get('/catalog',[CatalogController::class,'index']);
Route::get('login_user',[HalamanControl::class,'login_user']);
Route::get('order',[HalamanControl::class,'order']);
Route::get('/register',[HalamanControl::class,'register']);
Route::get('/about',[HalamanControl::class,'about']);
Route::get('/produk',[ProdukController::class,'index']);
Route::get('comment',[HalamanControl::class,'comment']);
Route::get('/komentar',[CommentsController::class,'index']);
Route::post('/komentar',[CommentsController::class,'store']);
Route::post('/produk',[ProdukController::class,'store']);
// Route::post('/login',[UserController::class,'store']);
Route::post('/postlogin',[LoginController::class,'postlogin']);
Auth::routes();


//route show
Route::get('/catalog/{product}',[ProdukController::class,'show']);
Route::get('/pesanan/hapus/{id}',[MessagesController::class,'hapus']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'is_admin']], function() {

Route::get('/produk/edit/{id}',[ProdukController::class,'edit']);
Route::post('/produk/update/{id}',[ProdukController::class,'update']);
Route::get('/produk/hapus/{id}',[ProdukController::class,'hapus']);
Route::get('/pesanan',[MessagesController::class,'index']);
Route::get('/add_Produk',[HalamanControl::class,'add_Produk']);
Route::post('/pesananstore',[MessagesController::class,'store'])->name('pesanan.store');
Route::get('/komentar/hapus/{id}',[CommentsController::class,'hapus']);
});

