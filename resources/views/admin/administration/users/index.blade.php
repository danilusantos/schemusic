@extends('admin.layout.app', ['title' => 'Usuários'])

@section('content')
@section('page-header')
    <x-create-button :route="route('admin.administration.users.create')" />
@endsection

<div class="container-lg">
    <x-generic-table title="Usuários" model="user" routePrefix="users" :data="$data['users']" :columnsTitle="['Id', 'nome', 'E-mail', 'Status']"
        :columns="['id', 'name', 'email', 'status']" />
</div>

@endsection
