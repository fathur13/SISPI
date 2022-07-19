<?php

use App\Http\Controllers\Sispi\Admin\ArsipSurat\SuratkeluarController;
use App\Http\Controllers\Sispi\Admin\ArsipSurat\SuratmasukController;
use App\Http\Controllers\Sispi\Admin\DashboardController;
use App\Http\Controllers\Sispi\Admin\DokumenController;
use App\Http\Controllers\Sispi\Admin\ManagmentData\JenisdokumenController;
use App\Http\Controllers\Sispi\Admin\ManagmentData\JenissuratController;
use App\Http\Controllers\Sispi\Admin\ManagmentData\KelengkapanController;
use App\Http\Controllers\Sispi\Admin\ManagmentData\TemplatesuratController;
use App\Http\Controllers\Sispi\Admin\PengjauanSuratController;
use App\Http\Controllers\Sispi\Admin\ReviewDokumenController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/dashboard');

Route::resource('dashboard', DashboardController::class);
Route::resource('surat-keluar', SuratkeluarController::class);
Route::resource('surat-masuk', SuratmasukController::class);
Route::resource('jenis-dokumen', JenisdokumenController::class);
Route::resource('dokumen', DokumenController::class);
Route::resource('review-dokumen', ReviewDokumenController::class);


Route::get('pengajuan-surat/{suratkeluar}/edit', [PengjauanSuratController::class, 'edit']);
Route::put('pengajuan-surat/{suratkeluar}', [PengjauanSuratController::class, 'update']);
Route::get('pengajuan-surat/{suratkeluar}', [PengjauanSuratController::class, 'show']);
Route::get('pengajuan-surat/delete-pengajuan/{suratkeluar}', [PengjauanSuratController::class, 'deletePengajuan']);
Route::resource('pengajuan-surat', PengjauanSuratController::class);


Route::resource('jenis-surat', JenissuratController::class);
Route::get('jenis-surat/delete-jenissurat/{jenissurat}', [JenissuratController::class, 'deleteJenissurat']);
Route::resource('kelengkapan', KelengkapanController::class);
Route::get('kelengkapan/delete-kelengkapan/{kelengkapan}', [KelengkapanController::class, 'deleteKelengkapan']);
Route::resource('template-surat', TemplatesuratController::class);
Route::get('template-surat/delete-templatesurat/{templatesurat}', [TemplatesuratController::class, 'deleteTemplatesurat']);

Route::post('review-dokumen/filter', [ReviewDokumenController::class, 'filter']);
