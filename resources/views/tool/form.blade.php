<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Marca', $tool->Marca, ['class' => 'form-control' . ($errors->has('Marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Modelo', $tool->Modelo, ['class' => 'form-control' . ($errors->has('Modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoHerramienta') }}
            {{ Form::text('TipoHerramienta', $tool->TipoHerramienta, ['class' => 'form-control' . ($errors->has('TipoHerramienta') ? ' is-invalid' : ''), 'placeholder' => 'Tipoherramienta']) }}
            {!! $errors->first('TipoHerramienta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaDeRegsitro') }}
            {{ Form::text('FechaDeRegsitro', $tool->FechaDeRegsitro, ['class' => 'form-control' . ($errors->has('FechaDeRegsitro') ? ' is-invalid' : ''), 'placeholder' => 'Fechaderegsitro']) }}
            {!! $errors->first('FechaDeRegsitro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>