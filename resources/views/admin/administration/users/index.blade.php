@extends('admin.layout.app', ['title' => 'Usuários'])

@section('content')
    <div class="container-lg">
        <x-generic-table title="Usuários" model="user" routePrefix="users" :data="$data['users']" :columnsTitle="['Id', 'nome', 'E-mail', 'Status']"
            :columns="['id', 'name', 'email', 'status']" :routeCreate="route('admin.administration.users.create')" />
    </div>
@endsection
