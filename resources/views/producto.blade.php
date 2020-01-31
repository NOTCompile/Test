@extends('plantilla')

@section('seccion')
     
     <style>
          
     h1{color: white }

     td{ color:#000000}

     </style>
     <div class="container">
          <h1>REGISTRO DE GRUPOS ELECTROGENOS</h1>     
               <a href="{{ route('Inicio') }}" class="btn" role="button" style="background:red;color:white">Volver</a>
               <a href="{{ route('producto.producto_agregar') }}" class="btn" role="button" style="background:#FFAC00;color:white">Nuevo Grupo Electrogeno</a>
               
               <table class="table table-bordered table-sm">
                    <thead class="thead-dark" style="text-align:center">
                         <tr>
                              <th scope="col">CODIGO</th>
                              <th scope="col">NOMBRE DEL GRUPO ELECTROGENO</th>
                              <th scope="col">EMPRESA</th>
                              <th scope="col">UBICACION</th>
                              <th scope="col">ACCIONES</th>
                         </tr>
                    </thead>

                    <tbody style="background:#DADADA;">
                    @foreach ($item_producto as $item)
                         <tr>
                              <td scope="row">{{ $item->codigo_producto }}</td>
                              <td scope="row">
                                   <a href="{{ route('producto.producto_detalle', $item) }}">
                                        {{ $item->nombre_producto }}
                                   </a>
                              </td>
                              <td scope="row">{{$item->empresa_producto}}</td>
                              <td scope="row">{{$item->ubicacion_producto}}</td>
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