<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PlanController extends Controller
{
    public const ROUTE = 'admin.administration.plans.';

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
