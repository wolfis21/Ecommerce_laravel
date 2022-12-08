@extends('layouts.app')

@section('template_title')
    {{ $venta->date_vent ?? 'Show venta' }}
@endsection

@section('content')
    <section class="main" id="main">
        <div class="row justify-content-center" style="padding: 100px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de Venta</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>ID de Venta:</strong>
                            {{ $venta->id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Venta:</strong>
                            {{ $venta->date_vent }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Cliente comprador:</strong>
                            {{ $venta->client_ref }}
                        </div>

{{--                         <div class="form-group">
                            <strong>Nombre de Producto:</strong>
                            {{ $venta->products->name_product}}
                        </div> --}}


                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $venta->cant_product }}
                        </div>

                        <div class="form-group">
                            <strong>Precio Total a pagar:</strong>
                            {{ $venta->precio_total}}
                        </div>
                        
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('venta.index') }}"> Back</a>
                </div>
            </div>
        </div>
    </section>
@endsection
