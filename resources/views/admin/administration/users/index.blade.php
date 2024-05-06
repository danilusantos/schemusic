@extends('admin.layout.app', ['title' => 'Usuários'])

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.min.css">
@endsection

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

    <div class="card card-dark bg-dark">
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.0.6/js/dataTables.min.js"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
{{ $dataTable->scripts() }}
@endpush
