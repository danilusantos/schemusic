@extends('admin.layout.app', ['title' => 'Usuários - Novo Usuário'])
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('content')
    <div class="container-lg">
        {{-- <x-generic-form title="Novo Usuário" action="{{  }}" method="POST"
            modelName="user" :model="null" fieldView="admin.administration.users.partials.inputs" :backRoute="" /> --}}
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <x-back-button :route="route('admin.administration.users.index')" />
                <span class="card-title ms-3 text-secondary fw-bold">
                    Novo Usuário
                </span>
            </div>
            <div class="card-body">
                <x-alert-message />
                <form method="POST" action="{{ route('admin.administration.users.store') }}" id="form-user">
                    @csrf
                    @method('POST')

                    <div class="row mx-auto">
                        @include('admin.administration.users.partials.inputs', [
                            'user' => null,
                            'groups' => $data['groups'],
                        ])
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success" onclick="$('#form-user').submit()">Salvar</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/js/pages/users/validation.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#group").select2({
                theme: 'bootstrap4'
            });
        })
    </script>
@endpush
