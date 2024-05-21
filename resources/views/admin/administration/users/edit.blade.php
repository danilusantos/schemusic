@extends('admin.layout.app', ['title' => 'Usuários - Editar Usuário'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.back', [
        'route' => route('admin.administration.users.index'),
    ])
@endsection

<div class="container-lg">
    <x-generic-form title="Usuários - Editar Usuário"
        action="{{ route('admin.administration.users.update', ['user' => $user]) }}" method="PUT"
        fieldView="admin.administration.users.partials.inputs" :model="$user" modelName="user" />
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
