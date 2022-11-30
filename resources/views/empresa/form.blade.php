<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rif_empresa') }}
            {{ Form::text('rif_empresa', $empresa->rif_empresa, ['class' => 'form-control' . ($errors->has('rif_empresa') ? ' is-invalid' : ''), 'placeholder' => 'rif de empresa']) }}
            {!! $errors->first('rif_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name_empre') }}
            {{ Form::text('name_empre', $empresa->name_empre, ['class' => 'form-control' . ($errors->has('name_empre') ? ' is-invalid' : ''), 'placeholder' => 'nombre empresao']) }}
            {!! $errors->first('name_empre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descript_empre') }}
            {{ Form::text('descript_empre', $empresa->descript_empre, ['class' => 'form-control' . ($errors->has('descript_empre') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
            {!! $errors->first('descript_empre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_p') }}
            {{ Form::text('num_p', $empresa->num_p, ['class' => 'form-control' . ($errors->has('num_p') ? ' is-invalid' : ''), 'placeholder' => 'Precio de empresao']) }}
            {!! $errors->first('num_p', '<div class="invalid-feedback">:message</div>') !!}
        </div>
     
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>