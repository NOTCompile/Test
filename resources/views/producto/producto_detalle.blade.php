@extends('plantilla')

@section('seccion')

     <style>

          h4{color:white}

          dt{color: rebeccapurple; align-content: center; background: blanchedalmond}

          dd{color: white}

     </style>

     <div>
          <h4>Detalles de Grupo Electrogeno: {{ $producto->nombre_producto }}</h4>

               <dl class="row">
                    <dt class="col-sm-5">Imagen:</dt>
                    
                    <div>
                         <img src="{{ url('img/producto/' . $producto->imagen_producto)  }}" >
                    </div>
                    
                    <dd class="col-sm-5">
                         
                    </dd>
                    
                    <dt class="col-sm-5">ID:</dt>
                    <dd class="col-sm-5">{{ $producto->codigo_producto }}</dd>

                    <dt class="col-sm-5">Empresa</dt>
                    <dd class="col-sm-5">{{ $producto->empresa_producto }}</dd>

                    <dt class="col-sm-5">Ubicacion:</dt>
                    <dd class="col-sm-5">{{ $producto->ubicacion_producto }}</dd>

                    <dt class="col-sm-5">Periocidad:</dt>
                    <dd class="col-sm-5">{{ $producto->periocidad_producto }}</dd>

                    <dt class="col-sm-5">Tipo de Producto:</dt>
                    <dd class="col-sm-5">{{ $producto->tipo_producto }}</dd>

                    <dt class="col-sm-5">Celular:</dt>
                    <dd class="col-sm-5">{{ $producto->celular_producto }}</dd>

                    <dt class="col-sm-5">Hora de Inicio del Mantenimiento:</dt>
                    <dd class="col-sm-5">{{ $producto->hora_inicio_producto }}</dd>

                    <dt class="col-sm-5">Hora de Finalizacion del Mantenimiento</dt>
                    <dd class="col-sm-5">{{ $producto->hora_fin_producto}}</dd>
               </dl>     

          <a href="{{ route('Producto') }}" class="btn btn-success" role="button">Volver</a>

     </div>
@endsection