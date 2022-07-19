<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Keluhan\DashboardController;
use App\Http\Controllers\Sispi\Admin\PengjauanSuratController;
use App\Http\Controllers\Sispi\KeluhanKoordinator\KeluhanController;
use App\Http\Controllers\Sispi\Koordinator\PengajuansuratController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
Route::get('kirimemail', function (){
    Mail::raw('hai', function ($message) {
        $message->to('aku@gmail.com', 'Fathur');
        $message->subject('cuek');
    });
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'logout'])->name('logout');
Route::get('lapor', [DashboardController::class, 'lapor']);
Route::post('lapor', [DashboardController::class, 'store']);
Route::resource('landing-page', DashboardController::class);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('check-role', [AuthController::class, 'checkRole']);

Route::middleware('auth')->group(function () {
    Route::prefix('admin')
        ->middleware('can:sspi-admin')
        ->group(function () {
            include "_/admin.php";
        });
    Route::prefix('sispi')->group(function () {
        include "_/sispi.php";
    });
});

// Route::prefix('mahasiswa')->middleware('auth:mahasiswa')->group(function () {
//     Route::get('/', DashboardController::class);
// });

Route::controller(PengajuansuratController::class)->group(function () {
    Route::put('setuju/{id}', 'setuju');
    Route::put('ditolak/{id}', 'ditolak');
});

Route::put('ganti/{id}', [PengjauanSuratController::class, 'ganti']);
Route::put('hapus/{id}', [PengjauanSuratController::class, 'hapus']);
Route::put('proses/{id}', [KeluhanController::class, 'proses']);
