<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');

    Route::get('/registro', [AuthController::class, 'showRegister']);
    Route::post('/registro', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/dashboard/clientes', 'dashboard.clientes')->name('dashboard.clientes');
    Route::view('/dashboard/rutinas', 'dashboard.rutinas')->name('dashboard.rutinas');
    Route::view('/dashboard/calendario', 'dashboard.calendario')->name('dashboard.calendario');
    Route::view('/dashboard/ajustes', 'dashboard.ajustes')->name('dashboard.ajustes');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
