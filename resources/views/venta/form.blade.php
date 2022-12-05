<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="statu">Agregar Producto</label>
                <select name="product[]" class="form-control"  id="product" >
                @if($products->count() > 0)
                     {{-- <option disable value="">N/a</option> --}}
                     @foreach($products as $product)
                         <option value="{{$product->id}}">{{$product->codig_produc}} -- {{$product->name_product}}</option>
                     @endforeach
                @endif
            </select>
        </div>
        <div class="form-group"> {{-- es para agg img de seleccion  --}}
            <label for="statu">Confirme Producto</label>
                <select name="product_img" class="form-control"  id="product_img" >
                @if($products->count() > 0)
                     {{-- <option disable value="">N/a</option> --}}
                     @foreach($products as $product)
                         <option value="{{$product->precio_product}}">{{$product->codig_produc}} -- {{$product->name_product}}</option>
                     @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('date_vent') }}
            {{ Form::date('date_vent', $venta->date_vent, ['class' => 'form-control' . ($errors->has('date_vent') ? ' is-invalid' : ''), 'placeholder' => 'rif de venta']) }}
            {!! $errors->first('date_vent', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('client_ref') }}
            {{ Form::text('client_ref', $venta->client_ref, ['class' => 'form-control' . ($errors->has('client_ref') ? ' is-invalid' : ''), 'placeholder' => 'nombre ventao']) }}
            {!! $errors->first('client_ref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_product') }}
            {{ Form::text('cant_product', $venta->cant_product, ['class' => 'form-control' . ($errors->has('cant_product') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
            {!! $errors->first('cant_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
{{--         <div class="form-group">
            {{ Form::label('precio_total') }}
            {{ Form::text('precio_total', $venta->precio_total, ['class' => 'form-control' . ($errors->has('precio_total') ? ' is-invalid' : ''), 'placeholder' => 'Precio de ventao']) }}
            {!! $errors->first('precio_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      --}}
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>