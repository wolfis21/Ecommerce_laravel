@section('content')

    <div class="container">
        <div class="raw">
        <div class="row">
                <div class="col-md-6">
                    <h5>Agregar Sede de la Empresa</h5>
                    <p class="p-span">Ingrese la informacion de la sede </p>
                </div>
                
            </div>
            <!-- inicio de formulario -->
            <form class="formulario" action="{{route('zona.store')}}" name="formulario_registro" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
        
                    <div class="form-group col-md-6 col-lg-6">
                        <div class="input-group">
                            <label for="name">Direccion</label>
                            <input type="text" class="form-control  @error('direccion') is-invalid @enderror" name="direccion_z" id="direccion" autocomplete="off" value="{{ old('direccion') }}" placeholder="Direccion de Sede" >
                            @error('name')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <label for="numero_contac">Numero contacto</label>
                            <input type="text" class="form-control @error('numero_contac') is-invalid @enderror" name="number_cont" id="numero_contac" autocomplete="off" value="{{ old('numero_contac') }}" placeholder="Numero de Contacto">
                            @error('numero_contac')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                           <label for="statu">Agregar Empresa</label>
                               <select name="empresa_id" class="form-control"  id="empresa" >
                               @if($empresas->count() > 0)
                                    {{-- <option disable value="">N/a</option> --}}
                                    @foreach($empresas as $empresa)
                                        <option value="{{$empresa->id}}">{{$empresa->name_empre}}</option>
                                    @endforeach
                               @endif
                           </select>
                       </div>
                        
                                                       
                    </div>

                </div>
                <!-- botones de guardar y cancelar -->
                <div class="addEstudent">
                    <button type="submit" class="btn btn-submit" value="enviar">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection