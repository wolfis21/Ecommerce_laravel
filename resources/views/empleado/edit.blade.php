@extends('layouts.appold')

@section('template_title')
    Update empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update empleado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('empleado.update', $empleado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('empleado.form2')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
