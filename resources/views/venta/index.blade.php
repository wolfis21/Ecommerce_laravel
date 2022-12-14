@extends('layouts.app')

@section('template_title')
    venta
@endsection

@section('content')
    <div class="main" id="main">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Breve resumen de Ventas') }}
                            </span>

{{--                              <div class="float-right">
                                <a href="{{ route('venta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                     
										<th>ID</th>
										<th>Fecha de Venta</th>
										<th>Cliente Referencia</th>
										<th>Cantidad de Producto</th>
                                        {{-- <th>Precio c/u</th> FALTA IMPLEMENTAR--}}
										<th>Precio Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                           
											<td>{{ $venta->id }}</td>
											<td>{{ $venta->date_vent }}</td>
											<td>{{ $venta->client_ref }}</td>
                                            <td>{{ $venta->cant_product }}</td>
                                            {{-- <td>{{ $venta->product->precio_product}}</td> FALTA IMPLEMENTAR--}}
                                            <td>{{ $venta->precio_total}}</td>
                                            <td>
                                                <form action="{{ route('venta.destroy',$venta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('venta.show',$venta->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                   {{--  <a class="btn btn-sm btn-success" href="{{ route('venta.edit',$venta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> --}}
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
                {!! $ventas->links() !!}
            </div>
        </div>
    </div>
@endsection
