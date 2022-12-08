@extends('layouts.app')

@section('template_title')
    Update Product
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center" style="padding: 100px">
            <div class="col-md-4">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Product</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('product.update', $product->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('product.form2')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
