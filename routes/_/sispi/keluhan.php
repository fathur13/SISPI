<?php

use App\Http\Controllers\Sispi\Keluhan\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'keluhan/dashboard');

Route::resource('dashboard', DashboardController::class);