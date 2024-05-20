<?php

namespace Routes\Admin;

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')
    ->resource('users', UserController::class);
