@extends('admin.layout.app', ['title' => 'Planos - Editar Plano'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.plans.edit', $plan) }}
@endsection
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <x-back-button route="{{ route('admin.administration.plans.index') }}" />
                <span class="card-title ms-3 text-secondary fw-bold">
                    Editar Plano
                </span>
            </div>
            <div class="card-body">
                <x-alert-message />
                <form method="POST" action="{{ route('admin.administration.plans.update', ['plan' => $plan]) }}"
                    id="form-plan">
                    @csrf
                    @method('PUT')
                    <div class="row mx-auto">
                        @include('admin.administration.plans.partials.inputs', ['data' => $plan])
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success" onclick="$('#form-plan').submit()">Salvar</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/js/pages/plans/validation.js') }}"></script>
@endpush
