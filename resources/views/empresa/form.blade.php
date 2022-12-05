<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rif_empresa') }}
            {{ Form::text('rif_empresa', $empresa->rif_empresa, ['class' => 'form-control' . ($errors->has('rif_empresa') ? ' is-invalid' : ''), 'placeholder' => 'rif de empresa']) }}
            {!! $errors->first('rif_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name_empre', $empresa->name_empre, ['class' => 'form-control' . ($errors->has('name_empre') ? ' is-invalid' : ''), 'placeholder' => 'nombre de la empresa']) }}
            {!! $errors->first('name_empre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descript_empre', $empresa->descript_empre, ['class' => 'form-control' . ($errors->has('descript_empre') ? ' is-invalid' : ''), 'placeholder' => 'describe a la empresa']) }}
            {!! $errors->first('descript_empre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero principal') }}
            {{ Form::text('num_p', $empresa->num_p, ['class' => 'form-control' . ($errors->has('num_p') ? ' is-invalid' : ''), 'placeholder' => 'Numero de contacto']) }}
            {!! $errors->first('num_p', '<div class="invalid-feedback">:message</div>') !!}
        </div>
     
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

