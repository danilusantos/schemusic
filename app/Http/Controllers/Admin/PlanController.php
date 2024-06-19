<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PlanController extends Controller
{
    public const ROUTE = 'admin.administration.plans.';
    public const MESSAGE_NOT_FOUND = 'Plano não encontrado.';

    public function __construct(
        protected Plan $planModel
    ) {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $plans = $this->planModel
            ->whereNotNull('id')
            ->orderBy('id', 'DESC');

        $data = [
            'plans' => $plans->paginate()
        ];

        return view(self::ROUTE . 'index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view(self::ROUTE . 'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();

            $plan = new Plan();
            $plan->fill($request->all());
            $plan->save();

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()
                ->back()
                ->withInputs()
                ->with('error', 'Houve um erro ao cadastrar o plano. Erro: ' . $exception->getMessage());
        }

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Sucesso ao cadastrar o novo plano.');
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
        if (! $plan = $this->planModel->find($id)) {
            return redirect()->back()->with('error', self::MESSAGE_NOT_FOUND);
        }

        return view(self::ROUTE . '.edit', compact('plan'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (! $plan = $this->planModel->find($id)) {
            return redirect()->back()->with('error', self::MESSAGE_NOT_FOUND);
        }

        try {
            DB::beginTransaction();
            $plan->fill($request->all());
            $plan->save();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()
                ->back()
                ->withInputs()
                ->with('error', 'Houve um erro ao atualizar o plano. Erro: ' . $exception->getMessage());
        }

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Sucesso ao atualizar o plano.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        if (! $plan = $this->planModel->find($id)) {
            return redirect()->back()->with('error', self::MESSAGE_NOT_FOUND);
        }

        $plan->delete();

        return redirect()->route(self::ROUTE . 'index')->with('success', 'Plano removido com sucesso');

    }
}
