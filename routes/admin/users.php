<?php

namespace Routes\Admin;

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

Route::prefix('users')
    ->resource('users', UserController::class);


Route::get('users-table', function () {
    $model = User::query();

    return DataTables::eloquent($model)
                ->editColumn('name', 'Hi {{$name}}!')
                ->toJson();
});
