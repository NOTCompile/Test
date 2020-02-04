@extends('plantilla')

@section('seccion')
     
     <h3 class="display-4">Usuarios</h3>
                    <a class="btn btn-outline-primary" href="{{ route('usuario.usuario_agregar') }}">Agregar Nuevo Usuario</a>
                    <p> </p>
                    <div class="table-responsive">
                    <table class="table table-bordered ">
                         <thead class="thead-dark">
                         <tr>
                              <th class="text-center border border-dark">Codigo</th>
                              <th class="text-center border border-dark">Nombre</th>
                              <th class="text-center border border-dark">Tipo de Usuario</th>
                              <th class="text-center border border-dark">Correo</th>
                              <th class="text-center border border-dark">Acciones</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach ($item_usuario as $item)
                         <tr class="table-info">
                              <td class="border border-dark text-left">{{ $item->codigo_usuario }}</td>
                              <th class="border border-dark text-left"><a href="{{ route('usuario.usuario_detalle', $item) }}">
                                   {{ $item->nombre_usuario }}
                              </a></th>
                              <td class="border border-dark text-left">{{$item->tipo_usuario}}</td>
                              <td class="border border-dark text-left">{{$item->correo_usuario}}</td>
                              <td class="border text-center border-dark">
                                   <div class="btn-group"> <a href="{{ route('usuario.usuario_editar', $item) }}" class="btn btn-outline-warning">EDITAR</a> 
                                        <form action="{{ route('usuario.usuario_eliminar', $item) }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button  class="btn btn-outline-danger" type="submit">ELIMINAR</button> </div>
                              </td>
                         </tr>
                         <tr></tr>
                         @endforeach()   
                         </tbody>
                    </table>
                    </div>

                    {{ $item_usuario->links() }}
@endsection