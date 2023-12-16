<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
})->name('index');

//route login and register
Route::get('/auth/login', [UserController::class, 'loginForm'])->name('login.form');
Route::post('/auth/login', [UserController::class, 'login'])->name('login');
Route::get('/auth/register', [UserController::class, 'registerForm'])->name('register.form');
Route::post('/auth/register', [UserController::class, 'register'])->name('register');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/{booking}', [BookingController::class, 'show'])->name('booking.show');

Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant');
Route::get('/restaurant/create', [RestaurantController::class, 'create'])->name('restaurant.create');
Route::post('/restaurant/create', [RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/restaurant/{restaurant}', [RestaurantController::class, 'show'])->name('restaurant.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
