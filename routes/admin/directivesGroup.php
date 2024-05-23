<?php

namespace Routes\Admin;

use App\Http\Controllers\Admin\DirectiveGroupController;
use Illuminate\Support\Facades\Route;

Route::name('directivesGroup.')
    ->prefix('directivesGroup')
    ->controller(DirectiveGroupController::class)
    ->group(function () {
        Route::get('/edit/{group}', 'edit')->name('edit');
        Route::put('/update/{group}', 'update')->name('update');
    });
