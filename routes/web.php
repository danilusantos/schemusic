<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.index');
});

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        require __DIR__.'/admin/dashboard.php';

        Route::name('administration.')
            ->prefix('administration')
            ->group(function () {
                require __DIR__.'/admin/users.php';
                require __DIR__.'/admin/groups.php';
            });
    });

Auth::routes();
