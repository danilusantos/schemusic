<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $viewPath = 'admin.dashboard.';

    public function index()
    {
        return view($this->viewPath . 'index');
    }
}
