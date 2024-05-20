@extends('admin.layout.app', ['title' => 'Usuários - Novo Usuário'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.back', [
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
            <x-alert-message />

            {!! Form::open(['route' => 'admin.administration.users.store', 'method' => 'POST', 'id' => 'form-user']) !!}

            <div class="row mx-auto">

                @include('admin.administration.users.partials.inputs')

            </div>
            {!! Form::close() !!}
        </div>

        <div class="card-footer bg-dark">
            <button type="button" class="btn btn-success btn-sm" onclick="formSubmit('#form-user')">Salvar</button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/admin/js/pages/users/validation.js') }}"></script>
@endsection
