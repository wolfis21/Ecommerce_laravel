@extends('layouts.app')

@section('template_title')
    zona
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('zona') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('zona.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        {{-- buscar la manera de traerme tanto la empresa como la zona --}}
										<th>rif de empresa</th>
										<th>name de empresa</th>
										<th>direccion de la empresa</th>
										<th>numero de contacto</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($zonas as $zona)
                                        <tr>
                                           {{-- 
                                            investigar si dos foreach pueden
                                            traerme los datos de empresa y zonas a la vez
                                            --}}
											<td>{{ $zona->empresa->rif_empresa }}</td>
											<td>{{ $zona->empresa->name_empre }}</td>
											<td>{{ $zona->direccion_z }}</td>
                                            <td>{{ $zona->number_cont }}</td>
                                            <td>
                                                <form action="{{ route('zona.destroy',$zona->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('zona.show',$zona->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                   {{--  <a class="btn btn-sm btn-success" href="{{ route('zona.edit',$zona->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> --}}
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
                {!! $zonas->links() !!}
            </div>
        </div>
    </div>
@endsection
