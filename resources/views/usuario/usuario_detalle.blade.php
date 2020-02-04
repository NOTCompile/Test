@extends('plantilla')

@section('seccion')
               <dl class="row">
                    <dt class="col-sm-5">Imagen:</dt>
                    <div>
                         {{--<img src="{{ url('img/usuarios/' . $producto->codigo_producto . '.png')  }}" >--}}
                    </div>
               </dl>     

     <div class="py-5">
    <div class="container">
      <div class="row">
        <p class="lead text-left" >Detalles de {{ $usuario->nombre_usuario }}</p>
      </div>
      <div class="row">
          <a class="btn btn-outline-primary" href="{{ route('Usuario') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;Volver </a>
      </div>
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block rounded-circle mx-auto" src="https://static.pingendo.com/img-placeholder-3.svg"></div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-2 border border-dark">
          <p class="lead text-left">Codigo:</p>
        </div>
        <div class="col-md-10 border border-dark">
          <p class="lead text-left">{{ $usuario->codigo_usuario }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 border border-dark">
          <p class="lead text-left">Sexo:</p>
        </div>
        <div class="col-md-10 border border-dark">
          <p class="lead text-left">{{ $usuario->sexo_usuario }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 border border-dark">
          <p class="lead text-left">Edad:</p>
        </div>
        <div class="col-md-10 border border-dark">
          <p class="lead text-left">{{ $usuario->edad_usuario }} años</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 border border-dark">
          <p class="lead text-left">Correo:</p>
        </div>
        <div class="col-md-10 border border-dark">
          <p class="lead text-left">{{ $usuario->correo_usuario }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 border border-dark">
          <p class="lead text-left">Contraseña:</p>
        </div>
        <div class="col-md-10 border border-dark">
          <p class="lead text-left">{{ $usuario->contraseña_usuario }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 border border-dark">
          <p class="lead text-left">Tipo de Usuario:</p>
        </div>
        <div class="col-md-10 border border-dark">
          <p class="lead text-left">{{ $usuario->tipo_usuario }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection