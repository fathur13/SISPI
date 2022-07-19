<?php

use App\Http\Controllers\Sispi\Koordinator\DashboardController;
use App\Http\Controllers\Sispi\Koordinator\PengajuansuratController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'koordinator/dashboard');

Route::resource('dashboard', DashboardController::class);


Route::get('pengajuan-surat/{suratkeluar}/edit', [PengajuansuratController::class, 'edit']);
Route::get('pengajuan-surat/{suratkeluar}', [PengajuansuratController::class, 'show']);
Route::get('pengajuan-surat/showditolak/{suratkeluar}', [PengajuansuratController::class, 'showditolak']);
Route::put('update/{suratkeluar}', [PengajuansuratController::class, 'update']);
Route::put('pengajuan-surat/{suratkeluar}', [PengajuansuratController::class, 'selesai']);
Route::get('pengajuan-surat/delete-pengajuan/{suratkeluar}', [PengajuansuratController::class, 'deletePengajuan']);
Route::resource('pengajuan-surat', PengajuansuratController::class);

