<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagmentUser\ModuleController;
use App\Http\Controllers\Admin\ManagmentUser\PegawaiController;
use App\Http\Controllers\Admin\ManagmentUser\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/dashboard');
Route::resource('managment-user/pegawai', PegawaiController::class);
Route::get('managment-user/pegawai/delete-pegawai/{pegawai}', [PegawaiController::class, 'deletePegawai']);

Route::resource('managment-user/mahasiswa', MahasiswaController::class);
Route::resource('dashboard', DashboardController::class);

Route::post('managment-user/module/add-role', [ModuleController::class, 'addRole']);
Route::get('managment-user/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('managment-user/module', ModuleController::class);
Route::get('managment-user/module/delete-module/{module}', [ModuleController::class, 'deleteModule']);

