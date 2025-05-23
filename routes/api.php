<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'Hello world!']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('jwt')->group(function () {
    Route::get('/user', [UserController::class, 'getUser']);
    Route::get('/user/{id}', [UserController::class, 'getUserById']);
    Route::put('/user', [UserController::class, 'updateUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
