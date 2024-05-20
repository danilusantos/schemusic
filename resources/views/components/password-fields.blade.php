@props(['editPassword'])

<div class="col-12 col-md-12 px-0 row mx-auto" id="password-fields"
    @if (!$editPassword) style="display: none;" @endif>
    <div class="col-12 col-md-6">
        <div class="form-group">
            {!! Form::label('password', 'Senha') !!}
            {!! Form::password('password', [
                'placeholder' => 'Senha',
                'id' => 'password',
                'class' => 'form-control',
                'disabled' => !$editPassword,
            ]) !!}
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirmar Senha') !!}
            {!! Form::password('password_confirmation', [
                'placeholder' => 'Senha',
                'id' => 'password_confirmation',
                'class' => 'form-control',
                'disabled' => !$editPassword,
            ]) !!}
        </div>
    </div>
</div>
