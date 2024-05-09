<div class="col-12 col-md-6">
    <div class="form-group">
        {{ html()->label('Nome')->for('name') }}
        {{ html()->text('name')->placeholder('Nome')->id('name')->class('form-control')->value(isset($user) ? $user->name : old('name')) }}
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="form-group">
        {{ html()->label('E-mail')->for('email') }}
        {{ html()->text('email')->placeholder('E-mail')->id('email')->class('form-control')->value(isset($user) ? $user->email : old('email')) }}
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="form-group">
        {{ html()->label('Senha')->for('password') }}
        {{ html()->password('password')->placeholder('Senha')->id('password')->class('form-control')->value(old('password')) }}
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="form-group">
        {{ html()->label('Confirmar Senha')->for('password_confirmation') }}
        {{ html()->password('password_confirmation')->placeholder('Senha')->id('password_confirmation')->class('form-control')->value(old('password_confirmation')) }}
    </div>
</div>
