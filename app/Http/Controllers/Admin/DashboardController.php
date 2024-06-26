<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccessLog;
use App\Models\Group;
use App\Models\Plan;
use App\Models\User;

class DashboardController extends Controller
{
    public $viewPath = 'admin.dashboard.';

    public function __construct(
        protected User $userModel,
        protected Group $groupModel,
        protected Plan $planModel,
        protected AccessLog $accessLogModel
    ) {
        //
    }

    public function index()
    {
        $groups     = $this->groupModel->select('id')->count();
        $plans      = $this->planModel->select('id')->count();
        $users      = $this->userModel->select('id')->count();
        $accessLogs = $this->accessLogModel->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderby('date', 'ASC')
            ->get();

        $data = [
            'accessLogs'    => $accessLogs,
            'groups'        => $groups,
            'plans'         => $plans,
            'users'         => $users
        ];

        return view($this->viewPath . 'index', compact('data'));
    }
}
