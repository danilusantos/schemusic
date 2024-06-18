@extends('admin.layout.app', ['title' => 'Diretivas - Editar Diretiva'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.back', [
        'route' => route('admin.administration.directives.index'),
    ])
@endsection

<div class="container-lg">
    <x-generic-form title="Editar Diretiva"
        action="{{ route('admin.administration.directives.update', ['directive' => $directive]) }}" method="PUT"
        fieldView="admin.administration.directives.partials.inputs" :model="$directive" modelName="directive"
        :backRoute="{{ route('admin.administration.directives.index') }}" />
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/admin/js/pages/directives/validation.js') }}"></script>
@endpush
