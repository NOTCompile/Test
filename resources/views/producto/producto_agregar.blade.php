@extends('plantilla')

@section('seccion')
<div class="container">
          
     @if (session('mensaje_producto'))
     <div class="alert alert-success" role="alert">
          {{session('mensaje_producto') }} <a href="{{ route('Producto') }}" class="alert-link">¿Ver Grupos Electrogenos?</a>. Click para ver los Registros
     </div>

     @endif
     <h1>NUEVO GRUPO ELECTROGENO</h1>
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
                    <div class="input-group control-group increment" >
                         <input type="file" name="imagen_producto" class="form-control">
                              <div class="input-group-btn"> 
                                   <button class="btn btn-success" type="button"><i class="fa fa-plus"></i> Agregar</button>
                              </div>
                    </div>
                    <div class="clone hide">
                         <div class="control-group input-group" style="margin-top:10px">
                              <input type="file" name="" class="form-control">
                                   <div class="input-group-btn"> 
                                        <button class="btn btn-danger" type="button"><i class="fa fa-times"></i> Remove</button>
                                   </div>
                         </div>
                    </div>
               </div>
          </div>
               
          <div class="form-row">
               <div class="form-group">
                    <a class="btn btn-outline-primary" href="{{ route('Usuario') }}"><i class="fa fa-arrow-circle-o-left"></i>&nbsp;Volver </a>
                    <button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>
               </div>
          </div>
          
          <script type="text/javascript">
               $(document).ready(function() {
           
               $(".btn-success").click(function(){ 
                    var html = $(".clone").html();
                    $(".increment").after(html);
               });
          
               $("body").on("click",".btn-danger",function(){ 
                    $(this).parents(".control-group").remove();
               });
      
      });
               
           
           </script>
           
     </form>
     
</div>
@endsection
