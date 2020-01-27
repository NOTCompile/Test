@extends('plantilla')

@section('seccion')
     <h1>Nuevo Grupo Electrogeno</h1>
     @if (session('mensaje'))
          <div class="alert alert-success" role="alert">
          {{session('mensaje') }} <a href="{{ route('Producto') }}" class="alert-link">¿Ver Grupos Electrogenos?</a>. Click para ver los Registros
        </div>
     @endif
     
     <form action="{{ route('producto.producto_crear') }}" method="POST">
          @csrf
          <div class="form-row">
               <div class="form-group col-md-2">
                    <label for="">Codigo: </label>
                    <input type="text" name="codigo_producto" class="form-control">
               </div>
               
               <div class="form-group col-md-6">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre_producto" class="form-control">
               </div>
               <div class="form-group col-md-4">
                    <label for="">Empresa: </label>
                    <input type="text" name="empresa_producto" class="form-control">
               </div>
          </div>

          <div class="form-group">
               <label for="">Ubicacion: </label>
               <input type="text" name="ubicacion_producto" class="form-control">
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
                    <input type="text" name="celular_producto" class="form-control">
               </div>
               <div class="form-group col-md-2">
                    <label for="">Hora de Inicio</label>
                    <input type="text" name="hora_inicio_producto" class="form-control">
               </div>
               <div class="form-group col-md-3">
                    <label for="">Hora de la Finalizacion</label>
                    <input type="text" name="hora_fin_producto" class="form-control">
               </div>
          </div>
          <div class="form-row">
               <div class="form-group col-md-10">
                    <label for="">Imagen: </label>
                    <input type="text" name="imagen_producto" class="form-control">
               </div>
          </div>
          <div class="form-row">
               <button class="btn btn-success" type="submit">Guardar</button>
          </div>
          
     </form>   

@endsection