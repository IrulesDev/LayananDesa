<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\keluargaController;
use App\Http\Controllers\LayananDesaController;
use App\Http\Controllers\pendudukController;
use App\Http\Controllers\PengajuanLayananController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::resource('layanan', LayananDesaController::class);
Route::resource('pengajuan', PengajuanLayananController::class);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::resource('penduduk', pendudukController::class);
    Route::resource('keluarga', keluargaController::class);

    Route::post('/logout', [AuthController::class, 'logout']);
});

