@extends('plantilla')

@section('seccion')
     <h1>Usuario</h1>
     <h2>Tipo Usuario</h2>
     @foreach ($tipo_usuario as $item)
          <a href="{{ route('Usuario', $item)}}" class="h4 text-danger">{{ $item }}</a><br>
     @endforeach

     @if(!empty($tipo_usuario1))
         
     @switch($tipo_usuario1)
          @case($tipo_usuario1=='Gerente General')
               <h2>El Usuario es Gerente General</h2>
          @break
          @case($tipo_usuario1=='Técnico')
               <h2>El Usuario es Tecnico</h2>
          @break
          @case($tipo_usuario1=='Secretaria')
               <h2>El Usuario es Secretaria</h2>
          @break
          @case($tipo_usuario1=='Cliente')
               <h2>El Usuario es Cliente</h2>
          @default
             
     @endswitch

     @endif

@endsection