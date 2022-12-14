@extends('layouts.app')

@section('template_title')
    Empleado
@endsection

@section('content')
    <div class="main" id="main">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleados') }}
                            </span>

{{--                              <div class="float-right">
                                <a href="{{ route('empleado.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div> --}}
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                     
										<th>ID Empleado</th>
										<th>Cedula</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Fecha de Nacimiento</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Cargo</th>
                                        <th>Ubicado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                           
											<td>{{ $empleado->id }}</td>
											<td>{{ $empleado->cedula }}</td>
											<td>{{ $empleado->pname }}</td>
                                            <td>{{ $empleado->psubname }}</td>
                                            <td>{{ $empleado->fecha_n}}</td>
                                            <td>{{ $empleado->direccion}}</td>
                                            <td>{{ $empleado->telefono}}</td>
                                            <td>{{ $empleado->cargo}}</td>
                                            <td>{{ $empleado->zona->direccion_z}}</td>
                                            <td>
                                                <form action="{{ route('empleado.destroy',$empleado->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('empleado.show',$empleado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleado.edit',$empleado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empleados->links() !!}
            </div>
        </div>
    </div>
@endsection
