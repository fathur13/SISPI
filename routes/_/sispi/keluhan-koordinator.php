<?php

use App\Http\Controllers\Sispi\KeluhanKoordinator\DashboardController;
use App\Http\Controllers\Sispi\KeluhanKoordinator\JenisLaporanController;
use App\Http\Controllers\Sispi\KeluhanKoordinator\KeluhanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'keluhan-koordinator/dashboard');

Route::resource('dashboard', DashboardController::class);
Route::resource('keluhan', KeluhanController::class);

Route::resource('jenis-laporan', JenisLaporanController::class);
