@extends('plantilla')

@section('seccion')

     <h1>Grupos Electrogenos - Registrados</h1>
     <div class="container">
          <button href="{{ route('producto.producto_agregar') }}" type="button" class="btn btn-success" >Nuevo Grupo Electrogeno</button>
     </div>
     <div class="container my-4">
          <table class="table">
               <thead>
               <tr>
               <th scope="col">Codigo</th>
               <th scope="col">Nombre del Producto</th>
               <th scope="col">Empresa del Producto</th>
               <th scope="col">Ubicación del Producto</th>
               </tr>
               </thead>
               <tbody>
               @foreach ($item_producto as $item)
                    <tr>
                    <th scope="row">{{ $item->codigo_producto }}</th>
                    <th scope="row">
                         <a href="{{ route('producto.detalle', $item) }}">
                              {{ $item->nombre_producto }}
                         </a>
                    </th>
                    <th scope="row">{{$item->empresa_producto}}</th>
                    <th scope="row">{{$item->ubicacion_producto}}</th>
                    </tr>  
               @endforeach()                 
               </tbody>
          </table>
     </div>
@endsection