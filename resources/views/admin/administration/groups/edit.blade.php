@extends('admin.layout.app', ['title' => 'Grupos - Editar Grupo'])

@section('content')
    <div class="container-lg">
        <x-generic-form title="Grupos - Editar Grupo"
            action="{{ route('admin.administration.groups.update', ['group' => $group]) }}" method="PUT"
            fieldView="admin.administration.groups.partials.inputs" :model="$group" modelName="group" :backRoute="{{ route('admin.administration.groups.index') }}" />
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/js/pages/groups/validation.js') }}"></script>
@endpush
