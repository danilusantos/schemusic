@extends('admin.layout.app', ['title' => 'Grupos - Editar Grupo'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.back', [
        'route' => route('admin.administration.groups.index'),
    ])
@endsection

<div class="container-lg">
    <x-generic-form title="Grupos - Editar Grupo"
        action="{{ route('admin.administration.groups.update', ['group' => $group]) }}" method="PUT"
        fieldView="admin.administration.groups.partials.inputs" :model="$group" modelName="group" />
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/admin/js/pages/groups/validation.js') }}"></script>
@endpush