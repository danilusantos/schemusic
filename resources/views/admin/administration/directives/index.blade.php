@extends('admin.layout.app', ['title' => 'Diretivas'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.directives.index') }}
@endsection
@section('content')
    <div class="container-lg">
        <x-generic-table title="Diretivas" model="directive" routePrefix="directives" :data="$data['directives']" :columnsTitle="['Id', 'Chave', 'Descrição']"
            :columns="['id', 'name', 'description']" :routeCreate="route('admin.administration.directives.create')" />
    </div>
@endsection
