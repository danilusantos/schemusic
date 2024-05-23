@extends('admin.layout.app', ['title' => 'Grupos - Novo Grupo'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.back', [
        'route' => route('admin.administration.groups.index'),
    ])
@endsection

<div class="container-lg">
    <x-generic-form title="Novo Grupo" action="{{ route('admin.administration.groups.store') }}" method="POST"
        modelName="group" :model="null" fieldView="admin.administration.groups.partials.inputs" :backRoute="{{ route('admin.administration.groups.index') }}" />
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/admin/js/pages/groups/validation.js') }}"></script>
@endpush
