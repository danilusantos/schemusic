@extends('admin.layout.app', ['title' => 'Usuários - Novo Usuário'])

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
                Usuários - Novo usuário
            </span>
        </div>

        <div class="card-body">
            {{ html()->form('POST', route('admin.administration.users.store'))->id('formCadastrar')->open() }}

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
<script src="{{ asset('assets/admin/js/pages/users/validation.js') }}"></script>
@endpush
