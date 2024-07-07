<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);


// // Public routes
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);


// Route::middleware('auth:sanctum')->group(function () {
//     // Route::get('/user', [UserController::class, 'user']);
//     // Route::post('/logout', [AuthController::class, 'logout']);
//     // Route::post('/register', [RegisterController::class, 'register']);
//     // Route::post('/logout', [AuthController::class, 'logout']);
// });


