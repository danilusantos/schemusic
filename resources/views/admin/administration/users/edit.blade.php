@extends('admin.layout.app', ['title' => 'Usuários - Editar Usuário'])

@section('content')
@section('page-header')
    @include('admin.layout.components.back', [
        'route' => route('admin.administration.users.index'),
    ])
@endsection

<div class="container">

    <div class="card">
        <div class="card-header bg-dark">
            <span class="card-title text-white">
                Usuários - Editar Usuário
            </span>
        </div>

        <div class="card-body">
            {{ html()->form('PUT', route('admin.administration.users.update', ['user' => $user]))->id('formCadastrar')->open() }}

            <div class="row mx-auto">
                @include('admin.administration.users.components.inputs')
            </div>

            {{ html()->form()->close() }}
        </div>

        <div class="card-footer bg-dark">
            <button type="button" class="btn btn-success btn-sm" onclick="formSubmit('#formCadastrar')">Salvar</button>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/localization/messages_pt_BR.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/users/validation.js') }}"></script>
@endpush
