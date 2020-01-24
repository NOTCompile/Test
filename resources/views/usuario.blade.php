@extends('plantilla')

@section('seccion')
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
               @foreach ($nombre as $item)
                    <tr>
                    <th scope="row">{{$item->id}}</th>
                    <th scope="row">{{$item->nombre_usuario}}</th>
                    <th scope="row">{{$item->sexo}}</th>
                    <th scope="row">{{$item->edad}}</th>
                    <th scope="row">{{$item->correo}}</th>
                    <th scope="row">{{$item->tipo_usuario}}</th>
                    </tr>  
               @endforeach()                 
               </tbody>
             </table>
     </div>

@endsection