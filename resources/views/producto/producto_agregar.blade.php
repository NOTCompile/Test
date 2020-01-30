@extends('plantilla')

@section('seccion')

     <style>
          h1{ color: white }

          label{ color:white }
     </style>
     <a href="{{ route('Producto') }}">Volver</a>
     <h1>GRUPO ELECTROGENO - NUEVO</h1>
     @if (session('mensaje'))
          <div class="alert alert-success" role="alert">
          {{session('mensaje') }} <a href="{{ route('Producto') }}" class="alert-link">¿Ver Grupos Electrogenos?</a>. Click para ver los Registros
        </div>
     @endif
     
     <form action="{{ route('producto.producto_crear') }}" method="POST" enctype="multipart/form-data" id="upload">
          @csrf
          @error('codigo_producto')
               <div class="alert alert-danger">
                    El codigo del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror
          
          @error('nombre_producto')
               <div class="alert alert-danger">
                    El nombre del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror
          
          @error('empresa_producto')
               <div class="alert alert-danger">
                    La empresa del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror
          
          @error('ubicacion_producto')
               <div class="alert alert-danger">
                    La ubicacion_producto del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror

          @error('periocidad_producto')
               <div class="alert alert-danger">
                    periocidad_producto del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror

          @error('celular_producto')
               <div class="alert alert-danger">
                    El celular_producto del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror

          @error('hora_inicio_producto')
               <div class="alert alert-danger">
                    El hora_inicio_producto del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror

          @error('hora_fin_producto')
               <div class="alert alert-danger">
                    El hora_fin_producto del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror

          @error('imagen_producto')
               <div class="alert alert-danger">
                    El imagen_producto del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror
          
          <div class="form-row">
               <div class="form-group col-md-2">
                    <label for="">Codigo: </label>
                    <input type="text" name="codigo_producto" class="form-control" value="{{ old('codigo_producto') }}">
               </div>
               
               <div class="form-group col-md-6">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre_producto" class="form-control" value="{{ old('nombre_producto') }}">
               </div>
               <div class="form-group col-md-4">
                    <label for="">Empresa: </label>
                    <input type="text" name="empresa_producto" class="form-control" value="{{ old('empresa_producto') }}" text="hola">
               </div>
          </div>

          <div class="form-group">
               <label for="">Ubicacion: </label>
               <input type="text" name="ubicacion_producto" class="form-control" value="{{ old('ubicacion_producto') }}">
          </div>

          <div class="form-row">
               <div class="form-group col-md-2">
                    <label for="inputState">Periocidad</label>
                    <select name="periocidad_producto" id="inputState" class="form-control">
                         <option selected>Selecciona...</option>
                         <option text="Anual">Anual</option>
                         <option text="Bimestral">Bimestral</option>
                    </select>
               </div>
               <div class="form-group col-md-3">
                    <label for="inputState">Tipo de Producto: </label>
                    <select name="tipo_producto" id="inputState" class="form-control">
                         <option selected>Selecciona...</option>
                         <option text="Motor">Motor</option>
                         <option text="Generador">Generador</option>
                         <option text="Motor y Generador">Motor y Generador</option>
                    </select>
               </div>
               <div class="form-group col-md-2">
                    <label for="">Celular: </label>
                    <input type="text" name="celular_producto" class="form-control" value="{{ old('celular_producto') }}">
               </div>
               <div class="form-group col-md-2">
                    <label for="">Hora de Inicio</label>
                    <input type="text" name="hora_inicio_producto" class="form-control" value="{{ old('hora_inicio_producto') }}">
               </div>
               <div class="form-group col-md-3">
                    <label for="">Hora de la Finalizacion</label>
                    <input type="text" name="hora_fin_producto" class="form-control" value="{{ old('hora_fin_producto') }}">
               </div>
          </div>
          <div class="form-row">
               <div class="form-group">
                    <label for="">Imagen: </label>
                    <input type="file" name="imagen_producto" class="form-control-file" style="color:white">
               </div>
          </div>

          <div class="form-row">
               <button class="btn btn-success" type="submit">Guardar</button>
          </div>
          
     </form>   

     

@endsection