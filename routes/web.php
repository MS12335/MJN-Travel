<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success-checkout', function () {
    return view('success_checkout');
});

Route::get('/destinations', function () {
    return view('destinations');
});

Route::get('/detail-product', function () {
    return view('detail_product');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/about', function () {
    return view('about');
});
