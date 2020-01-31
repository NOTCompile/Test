@extends('plantilla')

@section('seccion')

     <style>

          h4{color:white}

          dt{color: rebeccapurple; align-content: center; background: blanchedalmond}

          dd{color: white}

     </style>


          <h4>Detalles de {{ $usuario->nombre_usuario }}</h4>

               <dl class="row">
                    <dt class="col-sm-5">Imagen:</dt>
                    
                    <div>
                         {{--<img src="{{ url('img/usuarios/' . $producto->codigo_producto . '.png')  }}" >--}}
                    </div>
                    
                    <dd class="col-sm-5">
                         
                    </dd>
                    
                    <dt class="col-sm-5">Codigo:</dt>
                    <dd class="col-sm-5">{{ $usuario->codigo_usuario }}</dd>

                    <dt class="col-sm-5">Sexo</dt>
                    <dd class="col-sm-5">{{ $usuario->sexo_usuario }}</dd>

                    <dt class="col-sm-5">Edad:</dt>
                    <dd class="col-sm-5">{{ $usuario->edad_usuario }}</dd>

                    <dt class="col-sm-5">Correo:</dt>
                    <dd class="col-sm-5">{{ $usuario->correo_usuario }}</dd>

                    <dt class="col-sm-5">Contraseña:</dt>
                    <dd class="col-sm-5">{{ $usuario->contraseña_usuario }}</dd>

                    <dt class="col-sm-5">Tipo de Usuario:</dt>
                    <dd class="col-sm-5">{{ $usuario->tipo_usuario }}</dd>

               </dl>     

          <a href="{{ route('Usuario') }}" class="btn btn-danger" role="button">VOLVER</a>


@endsection