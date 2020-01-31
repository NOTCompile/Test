@extends('plantilla')

@section('seccion')
     <div class="container">
          <style>
          
               h1{color: white }
          
               td{ color:#000000}
          
          </style>

          <h1>REGISTRO DE USUARIOS</h1>     
               <a href="{{ route('Inicio') }}" class="btn" role="button" style="background:red;color:white">Volver</a>
               <a href="{{ route('usuario.usuario_agregar') }}" class="btn" role="button" style="background:#FFAC00;color:white">Nuevo Usuario</a>

               <table class="table table-bordered table-sm">
                    <thead class="thead-dark" style="text-align:center">
                         <tr>
                              <th scope="col">CODIGO</th>
                              <th scope="col">NOMBRE</th>
                              <th scope="col">TIPO DE USUARIO</th>
                              <th scope="col">CORREO</th>
                              <th scope="col">ACCIONES</th>
                         </tr>
                    </thead>

                    <tbody style="background:#DADADA;">
                    @foreach ($item_usuario as $item)
                         <tr>
                              <td scope="row">{{ $item->codigo_usuario }}</td>
                              <td scope="row">
                                   <a href="{{ route('usuario.usuario_detalle', $item) }}">
                                        {{ $item->nombre_usuario }}
                                   </a>
                              </td>
                              <td scope="row">{{$item->tipo_usuario}}</td>
                              <td scope="row">{{$item->correo_usuario}}</td>
                              <td>
                                   <a href=" " class="btn btn-warning btn-sm">Editar</a>
                                   <a href=" " class="btn btn-danger btn-sm">Eliminar</a>
                              </td>
                         </tr>  
                    @endforeach()                 
                    </tbody>
               </table>
               <br>
     </div>
@endsection