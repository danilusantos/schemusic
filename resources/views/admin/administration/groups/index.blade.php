@extends('admin.layout.app', ['title' => 'Grupos'])

@section('content')
@section('page-header')
    <x-create-button :route="route('admin.administration.groups.create')" />
@endsection

<div class="container-lg">
    <x-generic-table title="Grupos" model="group" routePrefix="groups" :data="$data['groups']" :columnsTitle="['Id', 'Nome', 'Status']"
        :columns="['id', 'name', 'status']" />
</div>

@endsection
