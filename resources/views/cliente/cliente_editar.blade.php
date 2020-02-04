@extends('plantilla')

@section('seccion')
<h1>Editar Cliente: {{ $cliente_editar->nombre_cliente }}</h1>
     <form action="{{ route('cliente.cliente_actualizar', $cliente_editar->id) }}" method="POST">
          @csrf
          @method('PUT')
          @error('codigo_cliente')
               <div class="alert alert-danger">
                    El codigo del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror

          <div class="form-row">
               <div class="form-group col-2">
                    <label for="">Codigo: </label>
                    <input type="text" name="codigo_cliente" class="form-control" value="{{ $cliente_editar->codigo_cliente }}">
               </div>
               
               <div class="form-group col-8">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre_cliente" class="form-control" value="{{ $cliente_editar->nombre_cliente }}">
               </div>
               <div class="form-group col-md-2">
                    <label for="inputState">Sexo</label>
                    <select name="sexo_cliente" id="inputState" class="form-control">
                         <option selected>Selecciona...</option>
                         <option text="Femenino">Femenino</option>
                         <option text="Masculino">Masculino</option>
                    </select>
               </div>               
          </div>
          <div class="form-row">
               <div class="form-group col-3">
                    <label for="">Empresa: </label>
                    <input type="text" name="empresa_cliente" class="form-control" value="{{ $cliente_editar->empresa_cliente }}">
               </div>
               <div class="form-group col-1">
                    <label for="">Edad: </label>
                    <input type="text" name="edad_cliente" class="form-control" value="{{ $cliente_editar->edad_cliente }}">
               </div>
               <div class="form-group col-lg">
                    <label for="">Correo: </label>
                    <input type="text" name="correo_cliente" class="form-control" value="{{ $cliente_editar->correo_cliente }}">
               </div>
          </div>
          <div class="form-row">
               <div class="form-group col-lg">
                    <label for="">Direccion</label>
                    <input type="text" name="direccion_cliente" class="form-control" value="{{ $cliente_editar->direccion_cliente }}">
               </div>
               <div class="form-group col-auto">               
                    <label for="">Celular: </label>
                    <input type="text" name="celular_cliente" class="form-control" value="{{ $cliente_editar->celular_cliente }}">
               </div>
          </div>
          <div>
               <a class="btn btn-outline-primary" href="{{ route('Cliente') }}"><i class="fa fa-arrow-circle-o-left"></i>&nbsp;Volver </a>
               <button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>               
          </div>    
          
     </form>   
    
@endsection