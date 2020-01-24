@extends('plantilla')

@section('seccion')

     <h1>Detalles de Grupo Electrogeno: {{ $producto->nombre_producto }}</h1>
     <h4>ID: {{ $producto->id_producto }}</h4>
     <h4>Imagen: {{ $producto->imagen_producto}}</h4>
     <h4>Nombre: {{ $producto->nombre_producto }}</h4>
     <h4>Empresa: {{ $producto->empresa_producto }}</h4>
     <h4>Ubicacion: {{ $producto->ubicacion_producto }}</h4>
     <h4>Periocidad: {{ $producto->periocidad_producto }}</h4>
     <h4>Tipo Producto: {{ $producto->tipo_producto }}</h4>
     <h4>Celular: {{ $producto->celular_producto }}</h4>
     <h4>Hora de Inicio: {{ $producto->hora_inicio_producto }}</h4>
     <h4>Hora de Finalizacion: {{ $producto->hora_fin_producto}}</h4>

@endsection