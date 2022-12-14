@extends('layouts.app')

@section('template_title')
    Product
@endsection

@section('content')
    <div class="main" id="main">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productos') }}
                            </span>

{{--                              <div class="float-right">
                                <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>ID Producto</th>
										<th>Codigo</th>
										<th>Nombre de Producto</th>
										<th>Descripcion</th>
                                        <th>Imagen</th> {{-- Falta implementar --}}
										<th>Precio</th>
										<th>Stock</th>
										<th>Sede</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            
											<td>{{ $product->id}}</td>
											<td>{{ $product->codig_produc }}</td>
											<td>{{ $product->name_product }}</td>
                                            <td>{{ $product->descrip_product }}</td>
                                            <td><img height="120px" src="images/products/{{$product->image}}" /></td>
                                            {{-- <td><img src="{{$product->image}}" alt=""></td> --}}
                                            <td>{{ $product->precio_product }}</td>
                                            <td>{{ $product->cant_stock }}</td>
                                            <td>{{ $product->zona->direccion_z }}</td>

                                            <td>
                                                <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('shop.show',$product->id) }}" target="_blank"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('product.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
