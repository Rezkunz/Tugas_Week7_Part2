<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\AuthController;

// User dan biodata
Route::get('/users', [UsersController::class, 'index']);
Route::get('/biodatas', [BiodataController::class, 'index']);

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout (POST) 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
