@extends('admin.layout.app', ['title' => 'Grupos - Editar Grupo'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.groups.edit', $group) }}
@endsection
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <x-back-button route="{{ route('admin.administration.groups.index') }}" />
                <span class="card-title ms-3 text-secondary fw-bold">
                    Editar Grupo
                </span>
            </div>
            <div class="card-body">
                <x-alert-message />
                <form method="POST" action="{{ route('admin.administration.groups.update', ['group' => $group]) }}"
                    id="form-group">
                    @csrf
                    @method('PUT')
                    <div class="row mx-auto">
                        @include('admin.administration.groups.partials.inputs', ['data' => $group])
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success" onclick="$('#form-group').submit()">Salvar</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/js/pages/groups/validation.js') }}"></script>
@endpush
