@extends('admin.layout.app', ['title' => 'Usuários'])

@section('content')
@section('page-header')
    @include('admin.layout.components.create', [
        'route' => route('admin.administration.users.create'),
    ])
@endsection

<div class="container">
    <h5>
        Usuários
    </h5>

    <div class="card">
        <div class="card-body table-responsive table-sm">
            {{ $dataTable->table() }}
        </div>
    </div>

</div>

@endsection

@push('scripts')
{{ $dataTable->scripts() }}
@endpush
