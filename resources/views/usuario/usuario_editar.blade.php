@extends('plantilla')

@section('seccion')
    
<h1>Editar Usuario: {{ $usuario_editar->nombre_usuario }}</h1>
     <form action="{{ route('usuario.usuario_actualizar', $usuario_editar->id) }}" method="POST">
          @csrf
          @method('PUT')
          @error('codigo_usuario')
               <div class="alert alert-danger">
                    El codigo del Usuario es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror

          <div class="form-row">
               <div class="form-group col-2">
                    <label for="">Codigo: </label>
                    <input type="text" name="codigo_usuario" class="form-control" value="{{ $usuario_editar->codigo_usuario }}">
               </div>
               
               <div class="form-group col-8">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre_usuario" class="form-control" value="{{ $usuario_editar->nombre_usuario }}">
               </div>
               <div class="form-group col-md-2">
                    <label for="inputState">Sexo</label>
                    <select name="sexo_usuario" id="inputState" class="form-control">
                         <option selected>Escoge...</option>
                         <option text="Femenino">Femenino</option>
                         <option text="Masculino">Masculino</option>
                    </select>
               </div>               
          </div>
          <div class="form-row">
               <div class="form-group col-1">
                    <label for="">Edad: </label>
                    <input type="text" name="edad_usuario" class="form-control" value="{{ $usuario_editar->edad_usuario }}">
               </div>
               <div class="form-group col-lg">
                    <label for="">Correo: </label>
                    <input type="text" name="correo_usuario" class="form-control" value="{{ $usuario_editar->correo_usuario }}">
               </div>
          </div>
          <div class="form-row">
               <div class="form-group col-lg">
                    <label for="">Contraseña:</label>
                    <input type="text" name="contraseña_usuario" class="form-control" value="{{ $usuario_editar->contraseña_usuario }}">
               </div>
               <div class="form-group col-md-2">
                    <label for="inputState">Tipo de Usuario</label>
                    <select name="tipo_usuario" id="inputState" class="form-control">
                         <option selected>Escoge...</option>
                         <option text="Gerente Generals">Gerente General</option>
                         <option text="Secretaria">Secretaria</option>
                         <option text="Tecnico">Tecnico</option>
                         <option text="Cliente">Cliente</option>
                    </select>
               </div> 
          </div>
          <div>
               <a class="btn btn-outline-primary" href="{{ route('Usuario') }}"><i class="fa fa-arrow-circle-o-left"></i>&nbsp;Volver </a>
               <button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>               
          </div> 
          
     </form>   


@endsection