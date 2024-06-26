@extends('admin.layout.app', ['title' => 'Diretivas - Novo Plano'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.plans.create') }}
@endsection
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <x-back-button route="{{ route('admin.administration.plans.index') }}" />
                <span class="card-title ms-3 text-secondary fw-bold">
                    Novo Plano
                </span>
            </div>
            <div class="card-body">
                <x-alert-message />
                <form method="POST" action="{{ route('admin.administration.plans.store') }}" id="form-plan">
                    @csrf
                    @method('POST')

                    <div class="row mx-auto">
                        @include('admin.administration.plans.partials.inputs')
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
