<div class="col-12 col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', isset($data) ? $data->name : old('name'), [
            'placeholder' => 'Nome',
            'id' => 'name',
            'class' => 'form-control',
        ]) !!}
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="form-group">
        {!! Form::label('key', 'Chave') !!}
        {!! Form::text('key', isset($data) ? $data->name : old('key'), [
            'placeholder' => 'Chave',
            'id' => 'key',
            'class' => 'form-control text-uppercase',
        ]) !!}
    </div>
</div>

<div class="col-12 col-md-12">
    <div class="form-group">
        {!! Form::label('description', 'Descrição') !!}
        {!! Form::textarea('description', isset($data) ? $data->description : old('description'), [
            'placeholder' => 'Descrição',
            'id' => 'description',
            'class' => 'form-control',
        ]) !!}
    </div>
</div>
