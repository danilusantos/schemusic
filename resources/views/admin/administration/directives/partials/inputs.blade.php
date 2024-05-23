<div class="col-12 col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Chave') !!}
        {!! Form::text('name', isset($data) ? $data->name : old('name'), [
            'placeholder' => 'Chave',
            'id' => 'name',
            'class' => 'form-control text-uppercase',
        ]) !!}
    </div>
</div>
<div class="col-12 col-md-6">
    <div class="form-group">
        {!! Form::label('description', 'Descrição') !!}
        {!! Form::text('description', isset($data) ? $data->description : old('description'), [
            'placeholder' => 'Descrição',
            'id' => 'description',
            'class' => 'form-control',
        ]) !!}
    </div>
</div>
