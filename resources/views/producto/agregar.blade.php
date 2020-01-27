@extends('plantilla')

@section('seccion')
     <h1>Nuevo Grupo Electrogeno</h1>

     <form action="">
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
                         <option value="">Anual</option>
                         <option value="">Bimestral</option>
                    </select>
               </div>
               <div class="form-group col-md-3">
                    <label for="inputState">Tipo de Prodcuto: </label>
                    <select name="tipo_producto" id="inputState" class="form-control">
                         <option selected>Selecciona...</option>
                         <option value="">Motor</option>
                         <option value="">Generador</option>
                         <option value="">Motor y Generador</option>
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
               <button href="{{ route('producto.agregar') }}" type="button" class="btn btn-primary">Guardar</button>
          </div>
          
     </form>   

@endsection