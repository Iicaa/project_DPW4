<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\produkController;

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
    return view('index');
});

Route::get('400', function () {
    return view('400');
});

Route::get('account', function () {
    return view('account');
});

Route::get('blog-archive-2', function () {
    return view('blog-archive-2');
});

Route::get('blog-archive', function () {
    return view('blog-archive');
});

Route::get('blog-single', function () {
    return view('blog-single');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('login', function () {
    return view('login');
});

Route::get('product-detail', function () {
    return view('product-detail');
});

Route::get('product', function () {
    return view('product');
});

Route::get('wishlist', function () {
    return view('wishlist');
});

Route::get('template', function () {
    return view('template.base');
});

Route::get('base', function () {
    return view('admin.base');
});

Route::get('Beranda', [HomeController::class, 'showBeranda']);
Route::get('Kategori', [HomeController::class, 'showKategori']);
Route::get('login_admin', [HomeController::class, 'login_admin']);

Route::get('produk', [produkController::class, 'index']);
Route::get('produk/create', [produkController::class, 'create']);
Route::post('produk', [produkController::class, 'store']);
Route::get('produk/{produk}', [produkController::class, 'show']);
Route::get('produk/{produk}/edit', [produkController::class, 'edit']);
Route::put('produk/{produk}', [produkController::class, 'update']);
Route::delete('produk/{produk}', [produkController::class, 'destroy']);

Route::get('pelanggan', function () {
    return view('admin.section.pelanggan');
});

Route::get('supplier', function () {
    return view('admin.section.supplier');
});

Route::get('login_admin', function () {
    return view('admin.section.login_admin');
});

Route::get('Promo', function () {
    return view('admin.section.Promo');
});