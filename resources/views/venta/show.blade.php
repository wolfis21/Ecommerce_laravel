@extends('layouts.app')

@section('template_title')
    {{ $venta->date_vent ?? 'Show venta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('venta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                    {{-- //arreglar esto aca --}}
                        <div class="form-group">
                            <strong>id venta:</strong>
                            {{ $venta->id }}
                        </div>
                        <div class="form-group">
                            <strong>date_venta:</strong>
                            {{ $venta->date_vent }}
                        </div>
                        
                        <div class="form-group">
                            <strong>cliente de la venta:</strong>
                            {{ $venta->client_ref }}
                        </div>
                        <div class="form-group">
                            <strong>cant_product:</strong>
                            {{ $venta->cant_product }}
                        </div>

                        <div class="form-group">
                            <strong>precio total:</strong>
                            {{ $venta->precio_total}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
