<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Plan;
use App\Models\User;

class DashboardController extends Controller
{
    public $viewPath = 'admin.dashboard.';

    public function __construct(
        protected User $userModel,
        protected Group $groupModel,
        protected Plan $planModel
    ) {
        //
    }

    public function index()
    {
        $groups = $this->groupModel->select('id')->count();
        $plans  = $this->planModel->select('id')->count();
        $users  = $this->userModel->select('id')->count();

        $data = [
            'groups' => $groups,
            'plans' => $plans,
            'users' => $users
        ];

        return view($this->viewPath . 'index', compact('data'));
    }
}
