 <div class="box box-info padding-1">
    <div class="box-body">
    
        <div class="form-group">
            {{ Form::label('tool_id') }} 
            {{ Form::text('tool_id', $calibration->tool_Id, ['class' => 'form-control' . ($errors->has('tool_id') ? ' is-invalid' : ''), 'placeholder' => 'Tool Id']) }}
            {!! $errors->first('tool_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Status') }}
            {{ Form::text('Status', $calibration->Status, ['class' => 'form-control' . ($errors->has('Status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('Status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $calibration->Description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
