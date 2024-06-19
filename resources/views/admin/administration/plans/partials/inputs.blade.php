<div class="col-12 col-md-12">
    <div class="form-group">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', isset($data) ? $data->name : old('name'), [
            'placeholder' => 'Nome',
            'id' => 'name',
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
            'style' => 'min-height: 150px;',
        ]) !!}
    </div>
</div>
<div class="col-12 col-md-6">
    <div class="form-group">
        {!! Form::label('value', 'Valor R$') !!}
        {!! Form::number('value', isset($data) ? $data->value : old('value'), [
            'placeholder' => 'Nome',
            'id' => 'value',
            'class' => 'form-control',
            'step' => '.01',
        ]) !!}
    </div>
</div>
<div class="col-12 col-md-6">
    <div class="form-group">
        {!! Form::label('period_month', 'Periodo (em meses)') !!}
        {!! Form::number('period_month', isset($data) ? $data->period_month : old('period_month'), [
            'placeholder' => 'Nome',
            'id' => 'period_month',
            'class' => 'form-control',
        ]) !!}
    </div>
</div>
<div class="col-12 col-md-12">
    <div class="form-group">
        {!! Form::label('status', 'Nome') !!}
        {!! Form::select(
            'status',
            ['' => 'Selecione', '1' => 'Ativo', '2' => 'Inativo'],
            isset($data) ? $data->status : old('status'),
            [
                'id' => 'status',
                'class' => 'form-control',
            ],
        ) !!}
    </div>
</div>
