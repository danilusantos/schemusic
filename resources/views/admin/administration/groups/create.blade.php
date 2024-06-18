@extends('admin.layout.app', ['title' => 'Grupos - Novo Grupo'])

@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <x-back-button route="{{ route('admin.administration.groups.index') }}" />
                <span class="card-title ms-3 text-secondary fw-bold">
                    Novo Grupo
                </span>
            </div>
            <div class="card-body">
                <x-alert-message />
                <form method="POST" action="{{ route('admin.administration.groups.store') }}" id="form-group">
                    @csrf
                    @method('POST')

                    <div class="row mx-auto">
                        @include('admin.administration.groups.partials.inputs')
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
