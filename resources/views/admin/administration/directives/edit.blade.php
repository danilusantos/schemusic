@extends('admin.layout.app', ['title' => 'Diretivas - Editar Diretiva'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.directives.edit', $directive) }}
@endsection
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <x-back-button route="{{ route('admin.administration.directives.index') }}" />
                <span class="card-title ms-3 text-secondary fw-bold">
                    Editar Diretiva
                </span>
            </div>
            <div class="card-body">
                <x-alert-message />
                <form method="POST"
                    action="{{ route('admin.administration.directives.update', ['directive' => $directive]) }}"
                    id="form-directive">
                    @csrf
                    @method('PUT')
                    <div class="row mx-auto">
                        @include('admin.administration.directives.partials.inputs', ['data' => $directive])
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success" onclick="$('#form-directive').submit()">Salvar</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/js/pages/directives/validation.js') }}"></script>
@endpush
