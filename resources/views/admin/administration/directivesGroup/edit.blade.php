@extends('admin.layout.app', ['title' => 'Diretivas do Grupo - Editar Grupo'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.directivesGroup.edit', $data['group']) }}
@endsection
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <x-back-button route="{{ route('admin.administration.groups.index') }}" />
                <span class="card-title text-secondary fw-bold ms-3">
                    Diretivas do Grupo
                </span>
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
            <div class="card-footer">
                <button type="submit" class="btn btn-success bg-olive"
                    onclick="$('#form-directivesGroup').submit()">Salvar</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/js/pages/groups/validation.js') }}"></script>
@endpush
