<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hai', function () {
    return response()->json(['message' => 'Halo dari Laravel API!']);
});
