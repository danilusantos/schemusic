@extends('admin.layout.app', ['title' => 'Usuários - Editar Usuário'])

@section('content')
@section('page-header')
@endsection

<div class="container-lg">
    {{-- <x-generic-form title="Usuários - Editar Usuário"
        action="{{ route('admin.administration.users.update', ['user' => $user]) }}" method="PUT"
        fieldView="admin.administration.users.partials.inputs" :model="$user" modelName="user" :backRoute="route('admin.administration.users.index')" /> --}}
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <x-back-button :route="route('admin.administration.users.index')" />
            <span class="card-title ms-3 text-secondary fw-bold">
                Editar Usuário
            </span>
        </div>
        <div class="card-body">
            <x-alert-message />
            <form method="POST" action="{{ route('admin.administration.users.update', ['user' => $data['user']]) }}"
                id="form-user">
                @csrf
                @method('PUT')

                <div class="row mx-auto">
                    @include('admin.administration.users.partials.inputs', [
                        'user' => $data['user'],
                        'groups' => $data['groups'],
                    ])
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success" onclick="$('#form-user').submit()">Salvar</button>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/admin/js/pages/users/validation.js') }}"></script>
<script>
    function togglePasswordFields() {
        let passwordFields = $("#password-fields");
        let checkbox = $("#edit-password");
        if (checkbox.is(":checked")) {
            passwordFields.slideDown();
            passwordFields.find("input").prop("disabled", false);
        } else {
            passwordFields.slideUp();
            passwordFields.find("input").prop("disabled", true);
        }
    }

    // Initialize the password fields visibility based on the checkbox state
    togglePasswordFields();

    // Attach the toggle function to the checkbox change event
    $("#edit-password").change(togglePasswordFields);
</script>
@endpush
