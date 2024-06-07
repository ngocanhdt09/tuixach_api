<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Trong routes/api.php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Auth;
// routes/api.php

// Route::post('/login',[AuthController::class, 'login']);

// Route::post('/login', [UserController::class, 'login']);

Route::get('/users', [UserController::class, 'index']);



Route::post('/login', [AuthController::class, 'login']);
// routes/api.php



Route::post('/register', [UserController::class, 'register']);

