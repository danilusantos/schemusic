<div class="col-12 col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', isset($user) ? $user->name : old('name'), [
            'placeholder' => 'Nome',
            'id' => 'name',
            'class' => 'form-control',
        ]) !!}
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::text('email', isset($user) ? $user->email : old('email'), [
            'placeholder' => 'E-mail',
            'id' => 'email',
            'class' => 'form-control',
        ]) !!}
    </div>
</div>

@if (request()->is('*users*edit*'))
    <div class="form-group">
        <div class="form-check form-group">
            {!! Form::checkbox('edit-password', null, false, [
                'id' => 'edit-password',
                'class' => 'form-check-input',
            ]) !!}
            {!! Form::label('edit-password', 'Editar Senha', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <div class="col-12 col-md-12 px-0 row mx-auto" id="password-fields" style="display: none;">
        <div class="col-12 col-md-6">
            <div class="form-group">
                {!! Form::label('password', 'Senha') !!}
                {!! Form::password('password', [
                    'placeholder' => 'Senha',
                    'id' => 'password',
                    'class' => 'form-control',
                    'disabled' => true,
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
                    'disabled' => true,
                ]) !!}
            </div>
        </div>
    </div>
@else
    <div class="col-12 col-md-12 px-0 row mx-auto" id="password-fields">
        <div class="col-12 col-md-6">
            <div class="form-group">
                {!! Form::label('password', 'Senha') !!}
                {!! Form::password('password', ['placeholder' => 'Senha', 'id' => 'password', 'class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirmar Senha') !!}
                {!! Form::password('password_confirmation', [
                    'placeholder' => 'Senha',
                    'id' => 'password_confirmation',
                    'class' => 'form-control',
                ]) !!}
            </div>
        </div>
    </div>
@endif
