<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return "Dashboard";
    });

    Route::get('/artikel', [ArtikelController::class, 'index']);
    
    Route::get('/artikel/{id}', [ArtikelController::class, 'show']);

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', function () {
            return "Admin Only";
        });
    });
});