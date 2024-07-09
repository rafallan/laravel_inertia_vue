<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Home')->name('home');

Route::inertia('/register', 'Auth/Register')->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register-user');

Route::inertia('/login', 'Auth/Login')->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login-user');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
