<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::get('/hai', function () {
    return response()->json(['message' => 'Halo dari Laravel API!']);
});
Route::get('/users', [UserController::class, 'index']);

