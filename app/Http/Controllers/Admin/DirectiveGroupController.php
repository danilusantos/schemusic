<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Permission;
use Illuminate\Http\Request;

class DirectiveGroupController extends Controller
{
    public const ROUTE = 'admin.administration.directivesGroup.';

    public function __construct(
        private Group $groupModel,
        private Permission $permissionModel
    ) {
        //
    }

    public function edit(string $id)
    {
        if (! $group = $this->groupModel->find($id)) {
            return redirect()->back()->with('error', 'Não foi possível encontrar o grupo');
        }

        $permissions = $this->permissionModel
            ->whereNotNull('id')
            ->get()
            ->toArray();

        $data = [
            'group' => $group,
            'permissions' => $permissions
        ];

        return view(self::ROUTE . 'edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $permissions = $request->get('permissions');

        if (! $group = $this->groupModel->find($id)) {
            return redirect()->back()->with('error', 'O grupo informado não foi encontrado.');
        }

        if (isset($permissions) && ! empty($permissions)) {
            $group->removeAllPermissions();
            foreach($permissions as $permission) {
                $group->assignPermission($permission);
            }
        }

        return redirect()->route('admin.administration.groups.index')->with('success', 'Diretivas de grupos ajustadas com sucesso');
    }
}
