@extends('plantilla')

@section('seccion')
     <h1>Usuario</h1>
     <h2>Tipo Usuario</h2>
 {{--     @foreach ($tipo_usuario as $item)
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

     @endif--}}

     <div class="container my-4">
          <h1 class="display-4">Usuario</h1>
          <table class="table">
               <thead>
                 <tr>
                   <th scope="col">#id</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">Sexo</th>
                   <th scope="col">Edad</th>
                   <th scope="col">Correo</th>
                   <th scope="col">Tipo de Usuario</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">1</th>
                   <td>Mark</td>
                   <td>Otto</td>
                   <td>@mdo</td>
                 </tr>
                 <tr>
                   <th scope="row">2</th>
                   <td>Jacob</td>
                   <td>Thornton</td>
                   <td>@fat</td>
                 </tr>
                 <tr>
                   <th scope="row">3</th>
                   <td>Larry</td>
                   <td>the Bird</td>
                   <td>@twitter</td>
                 </tr>
               </tbody>
             </table>
     </div>

@endsection