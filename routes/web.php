<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('get-started', [RegisterController::class, 'getStarted'])->name('get.started');
Route::get('register-with-email', [RegisterController::class, 'registerWithEmail'])->name('register.email');
Route::post('register', [RegisterController::class, 'store'])->name('user.register');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('logout', [RegisterController::class, 'logout'])->name('auth.logout');
Route::post('authenticate', [LoginController::class, 'store'])->name('auth.login');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::apiResource('todos', TodoController::class);
});