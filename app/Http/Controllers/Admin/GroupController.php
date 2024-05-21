<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public const ROUTE = 'admin.administration.groups.';

    public function __construct(
        private Group $groupModel
    ) {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = $this->groupModel
            ->whereNotNull('id')
            ->orderBy('id');

        $data = [
            'groups' => $groups->paginate()
        ];

        return view(self::ROUTE . 'index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::ROUTE . 'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->only([
            'name',
            'description',
            'key'
        ]);

        if (! $this->groupModel->create($inputs)) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível cadastrar o grupo.');
        }

        return redirect()->route(self::ROUTE . 'index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (! $group = Group::find($id)) {
            return redirect()->back()->with('error', 'Grupo não encontrado');
        }

        return view(self::ROUTE . '.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inputs = $request->only([
            'name',
            'description',
            'key'
        ]);

        if (! $group = $this->groupModel->find($id)) {
            return redirect()->back()->with('error', 'Grupo não encontrado');
        }

        if (! $group->update($inputs)) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível atualizar o grupo');
        }

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Grupo atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (! $group = $this->groupModel->find($id)) {
            return redirect()->back()->with('error', 'Grupo não encontrado');
        }

        $group->delete();

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Grupo removido com sucesso');
    }
}
