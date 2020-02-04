@extends('plantilla')

@section('seccion')            
                    
                    <h3 class="display-4">Grupos Electrogenos</h3>
                    <a class="btn btn-outline-primary" href="{{ route('producto.producto_agregar') }}">Agregar Nuevo Grupo</a>
                    <p> </p>
                    <div class="table-responsive">
                    <table class="table table-bordered ">
                         <thead class="thead-dark">
                         <tr>
                              <th class="text-center border border-dark">Codigo</th>
                              <th class="text-center border border-dark">Grupo Electrogeno</th>
                              <th class="text-center border border-dark">Empresa</th>
                              <th class="text-center border border-dark">Ubicación</th>
                              <th class="text-center border border-dark">Acciones</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach ($item_producto as $item)
                         <tr class="table-info">
                              <td class="border border-dark text-left">{{ $item->codigo_producto }}</td>
                              <th class="border border-dark text-left"><a href="{{ route('producto.producto_detalle', $item) }}">
                                   {{ $item->nombre_producto }}
                              </a></th>
                              <td class="border border-dark text-left">{{$item->empresa_producto}}</td>
                              <td class="border border-dark text-left">{{$item->ubicacion_producto}}</td>
                              <td class="border text-center border-dark">
                                   <div class="btn-group"> <a href="{{ route('producto.producto_editar') }}" class="btn btn-outline-warning">EDITAR</a> <a href="" class="btn btn-outline-danger">ELIMINAR</a> </div>
                              </td>
                         </tr>
                         <tr></tr>
                         @endforeach()   
                         </tbody>
                    </table>
                    </div>
                      
                    
               
     
@endsection