@extends('layouts.appold')

@section('template_title')
    Create Product
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-body">
                        <span class="card-title">Create Product</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('product.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('product.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
