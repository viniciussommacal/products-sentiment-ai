<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\JwtMiddleware;
use App\Http\Middleware\UserIsAdminMiddleware;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware(JwtMiddleware::class)->group(function () {
    Route::middleware(UserIsAdminMiddleware::class)->group(function () {
        Route::apiResource('category', CategoryController::class);
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
});
