@extends('admin.layout.app', ['title' => 'Diretivas do Grupo - Editar Grupo'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.back', [
        'route' => route('admin.administration.groups.index'),
    ])
@endsection

<div class="container-lg">
    <div class="card">
        <div class="card-header bg-dark">
            <span class="card-title text-white">
                Diretivas do Grupo
            </span>

            <x-back-button route="{{ route('admin.administration.groups.index') }}" />
        </div>
        <div class="card-body">
            <x-alert-message />
            <form method="POST"
                action="{{ route('admin.administration.directivesGroup.update', ['group' => $data['group']]) }}"
                id="form-directivesGroup">
                @csrf
                @method('PUT')

                <div class="row mx-auto">
                    @include('admin.administration.directivesGroup.partials.inputs', [
                        'group' => $data['group'],
                        'permissions' => $data['permissions'],
                    ])
                </div>
            </form>
        </div>
        <div class="card-footer bg-dark">
            <button type="submit" class="btn btn-success btn-sm"
                onclick="$('#form-directivesGroup').submit()">Salvar</button>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/admin/js/pages/groups/validation.js') }}"></script>
@endpush
