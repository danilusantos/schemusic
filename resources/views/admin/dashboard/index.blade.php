@extends('admin.layout.app', ['title' => 'Dashboard'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.dashboard.index') }}
@endsection
@section('content')
    <div class="container">
        <div class="row mx-auto">

            <div class="col-md-4 col-6 bg-">
                <x-card-count-dashboard title="Usuários" value="{{ $data['users'] }}" color="cyan" />
            </div>

            <div class="col-md-4 col-6">
                <x-card-count-dashboard title="Grupos" value="{{ $data['groups'] }}" color="primary" />
            </div>

            <div class="col-md-4 col-6">
                <x-card-count-dashboard title="Planos" value="{{ $data['plans'] }}" color="navy" />
            </div>

        </div>
    </div>
@endsection
