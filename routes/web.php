<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\MustBeAuthUser;
use Illuminate\Support\Facades\Route;

Route::middleware(MustBeAuthUser::class)->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::post('/logout', [LogoutController::class, 'destroy']);
    Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);
    Route::post('/blogs/{blog}/comments/store', [CommentController::class, 'store']);
});

Route::get('/register', [RegisterController::class, 'create']);
Route::get('/login', [LoginController::class, 'create']);
Route::post('/user-store', [RegisterController::class, 'store']);
Route::post('/user-login', [LoginController::class, 'login']);
