<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AuthController;


Route::get('/', [LandingPageController::class, 'home']);

Route::get('/kendaraan', [LandingPageController::class, 'kendaraan']);

Route::get('/login', [AuthController::class, 'loginPage']);

Route::post('/login', [AuthController::class, 'login']);