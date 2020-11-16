<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('template', function () {
    return view('template.base');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);

Route::get('kategori', [HomeController::class, 'showKategori']);

Route::get('discount', [HomeController::class, 'showDiscount']);

Route::get('login', [AuthController::class, 'showLogin']);



Route::get('product', [ProductController::class, 'index']);
Route::get('product/create', [ProductController::class, 'create']);
Route::get('product', [ProductController::class, 'store']);
Route::get('product/{product}', [ProductContrller::class, 'show']);
Route::get('product/{product}/edit', [ProductContrller::class, 'edit']);
Route::put('product/{product}', [ProductContrller::class, 'update']);
Route::delete('product/{product}', [ProductContrller::class, 'destroy']);



// Route::get('/informatika', function () {
    // return ('saya mahasiswa informatika');
// });
