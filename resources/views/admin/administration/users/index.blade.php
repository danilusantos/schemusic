@extends('admin.template.app', ['title' => 'Usuários'])

@section('content')
@section('page-header')
    @include('admin.template.components.create', [
        'route' => route('admin.administration.users.create'),
    ])
@endsection

<div class="container">
    <h5>
        Usuários
    </h5>

    <div class="card">
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>

</div>

@endsection

@push('scripts')
{{ $dataTable->scripts() }}
@endpush
