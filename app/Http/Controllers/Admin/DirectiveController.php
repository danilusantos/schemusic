<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Permission as Directive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DirectiveController extends Controller
{
    public const ROUTE = 'admin.administration.directives.';

    public function __construct(
        private Directive $directiveModel,
        private Group $groupModel
    ) {
        //
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directives = $this->directiveModel->whereNotNull('id')
            ->orderby('id');

        $data = [
            'directives' => $directives->paginate()
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
            'description'
        ]);

        if (! $this->directiveModel->create($inputs)) {
            return redirect()->back()->with("error", "Não foi possível criar a diretiva.");
        }

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Diretiva criada com sucesso.');
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
        if (! $directive = $this->directiveModel->find($id)) {
            return redirect()->route(self::ROUTE . 'index')->with('error', 'Diretiva não localizada.');
        }

        return view(self::ROUTE . 'edit', compact('directive'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inputs = $request->only([
            'name',
            'description',
        ]);

        if (! $directive = $this->directiveModel->find($id)) {
            return redirect()->back()->with('error', 'Diretiva não encontrado');
        }

        if (! $directive->update($inputs)) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível atualizar a Diretiva');
        }

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Diretiva atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (! $directive = $this->directiveModel->find($id)) {
            return redirect()->back()->with('error', 'Diretiva não encontrada.');
        }

        if (Auth::user()->group->hasPermission($directive->name) && $directive->name === 'ADMIN') {
            return redirect()->back()->with('error', 'Não é possível remover a diretiva administrativa.');
        }

        $groups = $this->groupModel->whereHas('permissions', function ($query) use ($directive) {
            $query->where('name', $directive->name);
        })->get();

        if (isset($groups)) {
            foreach ($groups as $group) {
                if ($group->hasPermission($directive->name)) {
                    $group->removePermission($directive->id);
                }
            }
        }

        $directive->delete();

        return redirect()->route('admin.administration.directives.index')->with('success', 'Diretiva removida com sucesso.');
    }
}
