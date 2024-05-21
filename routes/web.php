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

Route::prefix('member')
    ->name('member.')
    ->middleware(['auth', 'verified', 'can:member'])
    ->group(function () {

        Route::get('/', function () {
            return redirect()->route('member.dashboard.index');
        });

        require __DIR__ . '/member/dashboard.php';

    });

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified', 'can:admin'])
    ->group(function () {

        Route::get('/', function () {
            return redirect()->route('admin.dashboard.index');
        });

        require __DIR__ . '/admin/dashboard.php';

        Route::name('administration.')
            ->prefix('administration')
            ->group(function () {
                require __DIR__ . '/admin/users.php';
                require __DIR__ . '/admin/groups.php';
            });
    });

Auth::routes();
