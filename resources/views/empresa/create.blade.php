@extends('layouts.appold')

@section('template_title')
    Crear Empresa 
@endsection

@section('content')
<section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Crear Empresa </h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('empresa.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('empresa.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
