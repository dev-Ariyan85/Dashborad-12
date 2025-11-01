<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;





Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

// Handle form submissions
Route::post('/register-store', [AuthController::class, 'registerStore'])->name('register.store');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

