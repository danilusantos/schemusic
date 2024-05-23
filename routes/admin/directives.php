<?php

namespace Routes\Admin;

use App\Http\Controllers\Admin\DirectiveController;
use Illuminate\Support\Facades\Route;

Route::prefix('directives')
    ->resource('directives', DirectiveController::class);
