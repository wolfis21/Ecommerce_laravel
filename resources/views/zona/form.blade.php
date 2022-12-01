<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('direccion_z') }}
            {{ Form::text('direccion_z', $zona->direccion_z, ['class' => 'form-control' . ($errors->has('direccion_z') ? ' is-invalid' : ''), 'placeholder' => 'direccion de sede']) }}
            {!! $errors->first('direccion_z', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_cont') }}
            {{ Form::text('number_cont', $zona->number_cont, ['class' => 'form-control' . ($errors->has('number_cont') ? ' is-invalid' : ''), 'placeholder' => 'numero de contacto']) }}
            {!! $errors->first('number_cont', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group"> {{-- aca mejor es que se auto asigne la llave foranea --}}
            {{ Form::label('empresa_id') }}
            {{ Form::text('empresa_id', $zona->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'id de empresa ']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
     
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>