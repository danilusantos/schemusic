@extends('admin.layout.app', ['title' => 'Diretivas'])

@section('content')
@section('page-header')
    <x-create-button :route="route('admin.administration.directives.create')" />
@endsection

<div class="container-lg">
    <x-directive-table title="Diretivas" model="directive" routePrefix="directives" :data="$data['directives']" :columnsTitle="['Id', 'Chave', 'Descrição']"
        :columns="['id', 'name', 'description']" />
</div>

@endsection
