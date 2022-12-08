<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $empleado->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pname') }}
            {{ Form::text('pname', $empleado->pname, ['class' => 'form-control' . ($errors->has('pname') ? ' is-invalid' : ''), 'placeholder' => 'nombre empleado']) }}
            {!! $errors->first('pname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('psubname') }}
            {{ Form::text('psubname', $empleado->psubname, ['class' => 'form-control' . ($errors->has('psubname') ? ' is-invalid' : ''), 'placeholder' => 'apellido empleado']) }}
            {!! $errors->first('psubname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group"> {{-- 
                                    colocar un calendario chingon como en nuria con jquery etc
                                    --}}
            {{ Form::label('fecha_n') }}
            {{ Form::date('fecha_n', $empleado->fecha_n, ['class' => 'form-control' . ($errors->has('fecha_n') ? ' is-invalid' : ''), 'placeholder' => 'fecha de nacimiento']) }}
            {!! $errors->first('fecha_n', '<div class="invalid-feedback">:message</div>') !!}
        </div>
     
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $empleado->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $empleado->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group"> {{-- pensar un poco mas esto --}}
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $empleado->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
     

        <div class="form-group">
            <label for="statu">Agregar Zona</label>
            <select name="zona_id" class="form-control"  id="zona" >
                @if($zonas->count() > 0)
                     <option disable value="">N/a</option>
                     @foreach($zonas as $zona)
                         <option value="{{$zona->id}}">{{$zona->direccion_z}}</option>
                     @endforeach
                @endif
            </select>
        </div>
         
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>