

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Ubicacion de Sede') }}
            {{ Form::text('direccion_z', $zona->direccion_z, ['class' => 'form-control' . ($errors->has('direccion_z') ? ' is-invalid' : ''), 'placeholder' => 'ingrese direccion']) }}
            {!! $errors->first('direccion_z', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de Contacto') }}
            {{ Form::number('number_cont', $zona->number_cont, ['class' => 'form-control' . ($errors->has('number_cont') ? ' is-invalid' : ''), 'placeholder' => 'contacto de sede']) }}
            {!! $errors->first('number_cont', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="statu">Agregar Empresa</label>
                <select name="empresa_id" class="form-control"  id="empresa" >
                @if($empresas->count() > 0)
                     {{-- <option disable value="">N/a</option> --}}
                     @foreach($empresas as $empresa)
                         <option value="{{$empresa->id}}">{{$empresa->name_empre}}</option>
                     @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
