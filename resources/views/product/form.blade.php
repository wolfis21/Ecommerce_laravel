<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codig_produc') }}
            {{ Form::text('codig_produc', $product->codig_produc, ['class' => 'form-control' . ($errors->has('codig_produc') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de producto']) }}
            {!! $errors->first('codig_produc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name_product') }}
            {{ Form::text('name_product', $product->name_product, ['class' => 'form-control' . ($errors->has('name_product') ? ' is-invalid' : ''), 'placeholder' => 'nombre producto']) }}
            {!! $errors->first('name_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descrip_product') }}
            {{ Form::text('descrip_product', $product->descrip_product, ['class' => 'form-control' . ($errors->has('descrip_product') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
            {!! $errors->first('descrip_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_product') }}
            {{ Form::text('precio_product', $product->precio_product, ['class' => 'form-control' . ($errors->has('precio_product') ? ' is-invalid' : ''), 'placeholder' => 'Precio de producto']) }}
            {!! $errors->first('precio_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_stock') }}
            {{ Form::text('cant_stock', $product->cant_stock, ['class' => 'form-control' . ($errors->has('cant_stock') ? ' is-invalid' : ''), 'placeholder' => 'cantidad']) }}
            {!! $errors->first('cant_stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <label for="statu">Asociar a Zona</label>
                <select name="zona_id" class="form-control"  id="zona" >
                @if($zonas->count() > 0)
                     {{-- <option disable value="">N/a</option> --}}
                     @foreach($zonas as $zona)
                         <option value="{{$zona->id}}">{{$zona->direccion_z}}</option>
                     @endforeach
                @endif
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>