<?php

namespace Routes\Admin;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')
    ->name('dashboard.')
    ->controller(DashboardController::class)
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });
