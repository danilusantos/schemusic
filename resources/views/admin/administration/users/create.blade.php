@extends('admin.template.app', ['title' => 'Usuários - Novo Usuário'])

@section('content')
@section('page-header')
    @include('admin.template.components.back', [
        'route' => route('admin.administration.users.index'),
    ])
@endsection

<div class="container">
    <h5>
        Usuários - Novo usuário
    </h5>

    <div class="p-3 card">
        {{ html()->form('POST', route('admin.administration.users.store'))->open() }}

        <div class="form-group">
            {{ html()->label('Nome')->for('name') }}
            {{ html()->text('name')->placeholder('Nome')->id('name')->class('form-control') }}
        </div>

        {{ html()->form()->close() }}
    </div>
</div>

@endsection
