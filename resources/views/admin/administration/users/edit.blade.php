@extends('admin.layout.app', ['title' => 'Usuários - Editar Usuário'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.back', [
        'route' => route('admin.administration.users.index'),
    ])
@endsection

<div class="container">

    <div class="card">
        <div class="card-header bg-dark">
            <span class="card-title text-white">
                Usuários - Editar Usuário
            </span>
        </div>

        <div class="card-body">
            <x-alert-message />
            {!! Form::model($user, [
                'route' => ['admin.administration.users.update', $user],
                'method' => 'PUT',
                'id' => 'form-user',
            ]) !!}

            <div class="row mx-auto">
                @include('admin.administration.users.partials.inputs')
            </div>

            {!! Form::close() !!}
        </div>

        <div class="card-footer bg-dark">
            <button type="button" class="btn btn-success btn-sm" onclick="formSubmit('#form-user')">Salvar</button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
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
@endsection
