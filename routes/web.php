<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardDestinationsController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('checkout', [
        "title" => "Checkout"
    ]);
});

Route::get('/success-checkout', function () {
    return view('success_checkout');
});

Route::get('/destinations', [DestinationsController::class, "index"]);

Route::get('/destinations/{destination:slug}', [DestinationsController::class, "show"])->middleware("auth");

Route::get('/register', [RegisterController::class, "index"])->middleware("guest");
Route::post('/register', [RegisterController::class, "store"]);

Route::get('/login', [LoginController::class, "index"])->middleware("guest")->name("login");
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/dashboard/destinations', DashboardDestinationsController::class);

