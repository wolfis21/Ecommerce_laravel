@extends('layouts.appold')

@section('template_title')
    Crear venta 
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row row justify-content-center">
            <div class="col-md-4">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear venta </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('venta.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('venta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
