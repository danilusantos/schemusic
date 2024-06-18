@extends('admin.layout.app', ['title' => 'Planos'])

@section('content')
    <div class="container-lg">
        <x-generic-table title="Planos" model="plan" routePrefix="plans" :data="$data['plans']" :columnsTitle="['Id', 'Nome', 'Descrição', 'Período (Meses)', 'Status']"
            :columns="['id', 'name', 'description', 'period_month', 'status']" :routeCreate="route('admin.administration.plans.create')" />
    </div>
@endsection
