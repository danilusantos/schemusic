<?php

namespace Routes\Admin;

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

Route::prefix('plans')
    ->resource('plans', PlanController::class);
