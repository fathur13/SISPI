<?php

use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::prefix('koordinator')
    ->middleware('can:sispi-koordinator')
    ->group(function () {
        include "sispi/koordinator.php";
    });
Route::prefix('admin')
    ->middleware('can:sispi-admin')
    ->group(function () {
        include "sispi/admin.php";
    });
Route::prefix('keluhan')
    ->middleware('can:sispi-keluhan')
    ->group(function () {
        include "sispi/keluhan.php";
    });
Route::prefix('keluhan-koordinator')
    ->middleware('can:sispi-keluhan-koordinator')
    ->group(function () {
        include "sispi/keluhan-koordinator.php";
    });

Route::get('profile', [AuthController::class, 'profile']);
// Route::get('edit-profile', [AuthController::class, 'editprofile']);
Route::get('edit-profile/{pegawai}/edit', [AuthController::class, 'editprofile']);
Route::put('edit-profile/{pegawai}', [AuthController::class, 'updateProfile']);


