<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DestinationsController;
use App\Models\Destination;

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
    return view('index', [
        "title" => "Home",
        "destinations" => Destination::all()->take(3)
    ]);
});

Route::get('/categories', [CategoriesController::class, "index"]);

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success-checkout', function () {
    return view('success_checkout');
});

Route::get('/destinations', [DestinationsController::class, "index"]);

Route::get('/destinations/{destination:slug}', [DestinationsController::class, "show"]);

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
