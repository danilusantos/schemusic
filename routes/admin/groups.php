<?php

namespace Routes\Admin;

use App\Http\Controllers\Admin\GroupController;
use Illuminate\Support\Facades\Route;

Route::prefix('groups')
    ->resource('groups', GroupController::class);
