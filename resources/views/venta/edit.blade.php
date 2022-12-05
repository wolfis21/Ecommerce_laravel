@extends('layouts.app')

@section('template_title')
    Update venta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update venta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('venta.update', $venta->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('venta.form2')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
