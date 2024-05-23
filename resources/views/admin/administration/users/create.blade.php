@extends('admin.layout.app', ['title' => 'Usuários - Novo Usuário'])

@section('content')
    <div class="container-lg">
        <x-generic-form title="Novo Usuário" action="{{ route('admin.administration.users.store') }}" method="POST"
            modelName="user" :model="null" fieldView="admin.administration.users.partials.inputs" :backRoute="route('admin.administration.users.index')" />
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/js/pages/users/validation.js') }}"></script>
@endpush
