<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\keluargaController;
use App\Http\Controllers\pendudukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::resource('penduduk', pendudukController::class);
    Route::resource('keluarga', keluargaController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});

