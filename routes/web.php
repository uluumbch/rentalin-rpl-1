<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


Route::get('/', [LandingPageController::class, 'home']);

Route::get('/kendaraan', [LandingPageController::class, 'kendaraan']);

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/admin', [AdminController::class, 'admin'])->middleware('auth');