@extends('admin.layout.app', ['title' => 'Diretivas - Nova Diretiva'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.back', [
        'route' => route('admin.administration.directives.index'),
    ])
@endsection

<div class="container-lg">
    <x-generic-form title="Nova Diretiva" action="{{ route('admin.administration.directives.store') }}" method="POST"
        modelName="directive" :model="null" fieldView="admin.administration.directives.partials.inputs"
        :backRoute="{{ route('admin.administration.directives.index') }}" />
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/admin/js/pages/directives/validation.js') }}"></script>
@endpush
