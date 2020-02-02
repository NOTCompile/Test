@extends('plantilla')

@section('seccion')
<div class="container">
     <style>
          h1{ color: white }

          label{ color:white }
     </style>
     
     @if (session('mensaje_cliente'))
     <div class="alert alert-success" role="alert">
          {{session('mensaje_cliente') }} <a href="{{ route('Cliente') }}" class="alert-link">¿Ver Clientes?</a>. Click para ver los Registros
     </div>
     @endif

     <h1>NUEVO CLIENTE</h1>
     <form action="{{ route('cliente.cliente_crear') }}" method="POST">
          @csrf
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
                    <input type="text" name="codigo_cliente" class="form-control" value="{{ old('codigo_cliente') }}">
               </div>
               
               <div class="form-group col-8">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre_cliente" class="form-control" value="{{ old('nombre_cliente') }}">
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
                    <input type="text" name="empresa_cliente" class="form-control" value="{{ old('empresa_cliente') }}">
               </div>
               <div class="form-group col-1">
                    <label for="">Edad: </label>
                    <input type="text" name="edad_cliente" class="form-control" value="{{ old('correo_cliente') }}">
               </div>
               <div class="form-group col-lg">
                    <label for="">Correo: </label>
                    <input type="text" name="correo_cliente" class="form-control" value="{{ old('correo_cliente') }}">
               </div>
          </div>
          <div class="form-row">
               <div class="form-group col-lg">
                    <label for="">Direccion</label>
                    <input type="text" name="direccion_cliente" class="form-control" value="{{ old('direccion_cliente') }}">
               </div>
               <div class="form-group col-auto">               
                    <label for="">Celular: </label>
                    <input type="text" name="celular_cliente" class="form-control" value="{{ old('celular_cliente') }}">
               </div>
          </div>
          <div>
               <a href="{{ route('Cliente') }}" class="btn" role="button" style="background:red;color:white">Volver</a>
               <button class="btn btn-success" type="submit">Guardar</button>               
          </div>      
          
     </form>   

     
</div>
@endsection