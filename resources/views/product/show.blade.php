@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>codig_produc:</strong>
                            {{ $product->codig_produc }}
                        </div>
                        <div class="form-group">
                            <strong>name_product:</strong>
                            {{ $product->name_product }}
                        </div>
                        <div class="form-group">
                            <strong>descrip_product:</strong>
                            {{ $product->descrip_product }}
                        </div>

                        <div class="form-group">
                            <strong>precio_product:</strong>
                            {{ $product->precio_product }}
                        </div>
                        
                        <div class="form-group">
                            <strong>cant_stock:</strong>
                            {{ $product->cant_stock }}
                        </div>
                        
                        <div class="form-group">
                            <strong>zona_idZona:</strong>
                            {{ $product->zona_idZona }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
