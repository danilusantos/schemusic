<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public const ROUTE = 'admin.administration.users.';

    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userModel
            ->whereNotNull('id')
            ->orderBy('id', 'desc');

        $data = [
            'users' => $users->paginate()
        ];

        return view(self::ROUTE . 'index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::ROUTE . '.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->only('name', 'email', 'password');

        $inputs['password'] = bcrypt($inputs['password']);

        if (! $this->userModel->create($inputs)) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível cadastrar o usuário');
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
        if (! $user = User::find($id)) {
            $this->notFound();
        }

        return view(self::ROUTE . '.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->has('edit-password')) {
            $inputs = $request->only(['name', 'email', 'password']);
        } else {
            $inputs = $request->only(['name', 'email']);
        }

        if (! $user = $this->userModel->find($id)) {
            $this->notFound();
        }

        if (! $user->update($inputs)) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível atualizar o usuário');
        }

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Usuário atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->userModel->find($id);

        if (! $user && request()->user()->id === $id) {
            $this->notFound();
        }

        $user->delete();

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Usuário removido com sucesso');
    }

    private function notFound()
    {
        return redirect()->back()->with('error', 'Usuário não encontrado');
    }
}
