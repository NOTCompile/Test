@extends('plantilla')

@section('seccion')

                    <h3 class="display-4">Clientes</h3>
                    <a class="btn btn-outline-primary" href="{{ route('cliente.cliente_agregar') }}">Agregar Nuevo Cliente</a>
                    <p> </p>
                    <div class="table-responsive">
                    <table class="table table-bordered ">
                         <thead class="thead-dark">
                         <tr>
                              <th class="text-center border border-dark">Codigo</th>
                              <th class="text-center border border-dark">Nombre</th>
                              <th class="text-center border border-dark">Empresa</th>
                              <th class="text-center border border-dark">Correo</th>
                              <th class="text-center border border-dark">Celular</th>
                              <th class="text-center border border-dark">Acciones</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach ($item_cliente as $item)
                         <tr class="table-info">
                              <td class="border border-dark text-left">{{ $item->codigo_cliente }}</td>
                              <th class="border border-dark text-left"><a href="{{ route('cliente.cliente_detalle', $item) }}">
                                   {{ $item->nombre_cliente }}
                              </a></th>
                              <td class="border border-dark text-left">{{$item->empresa_cliente}}</td>
                              <td class="border border-dark text-left">{{$item->correo_cliente}}</td>
                              <td class="border border-dark text-left">{{$item->celular_cliente}}</td>
                              <td class="border text-center border-dark">
                                   <div class="btn-group"> <a href="{{ route('cliente.cliente_editar', $item) }}" class="btn btn-outline-warning">EDITAR</a> 
                                        <form action="{{ route('cliente.cliente_eliminar', $item) }}" method="POST" class="d-inline">
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


@endsection