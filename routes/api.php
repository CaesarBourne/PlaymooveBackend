<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', function (Request $request) {
    $data = $request->validate([
        'username' => 'required|string',
        'password' => 'required|string'
    ]);


    return response()->json(['message' => 'User Login successful!', 'data' => $data]);
});