<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// ORDER PAGE
Route::get('/order', function () {
    return view('order');
})->name('order.page');

// LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// REGISTER
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

