@extends('plantilla')

@section('seccion')
<div class="container">
     <style>
     
          h1{color: white }
     
          td{ color:#000000}
     
     </style>
     
     <h1>REGISTRO DE CLIENTES</h1>
          <a href="{{ route('Inicio') }}" class="btn" role="button" style="background:red;color:white">Volver</a>
          <a href="{{ route('cliente.cliente_agregar') }}" class="btn" role="button" style="background:#FFAC00;color:white">Nuevo Cliente</a>

          <table class="table table-bordered table-sm">
               <thead class="thead-dark" style="text-align:center">
                    <tr>
                         <th scope="col">CODIGO</th>
                         <th scope="col">NOMBRE</th>
                         <th scope="col">EMPRESA</th>
                         <th scope="col">CORREO</th>
                         <th scope="col">CELULAR</th>
                         <th scope="col">ACCIONES</th>
                    </tr>
               </thead>

               <tbody style="background:#DADADA;">
               @foreach ($item_cliente as $item)
                    <tr>
                         <td scope="row">{{ $item->codigo_cliente }}</td>
                         <td scope="row">
                              <a href="{{ route('cliente.cliente_detalle', $item) }}">
                                   {{ $item->nombre_cliente }}
                              </a>
                         </td>
                         <td scope="row">{{$item->empresa_cliente}}</td>
                         <td scope="row">{{$item->correo_cliente}}</td>
                         <td scope="row">{{$item->celular_cliente}}</td>
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