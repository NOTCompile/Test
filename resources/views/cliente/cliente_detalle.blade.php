@extends('plantilla')

@section('seccion')

     <style>

          h4{color:white}

          dt{color: rebeccapurple; align-content: center; background: blanchedalmond}

          dd{color: white}

     </style>

     
          <h4>Detalles de {{ $cliente->nombre_cliente }}</h4>

               <dl class="row">
                                        
                    <dt class="col-sm-5">Codigo:</dt>
                    <dd class="col-sm-5">{{ $cliente->codigo_cliente }}</dd>

                    <dt class="col-sm-5">Sexo:</dt>
                    <dd class="col-sm-5">{{ $cliente->sexo_cliente }}</dd>

                    <dt class="col-sm-5">Empresa:</dt>
                    <dd class="col-sm-5">{{ $cliente->empresa_cliente }}</dd>

                    <dt class="col-sm-5">Edad</dt>
                    <dd class="col-sm-5">{{ $cliente->edad_cliente }} años</dd>

                    <dt class="col-sm-5">Correo:</dt>
                    <dd class="col-sm-5">{{ $cliente->correo_cliente }}</dd>

                    <dt class="col-sm-5">Direccion</dt>
                    <dd class="col-sm-5">{{ $cliente->direccion_cliente }}</dd>

                    <dt class="col-sm-5">Celular</dt>
                    <dd class="col-sm-5">{{ $cliente->celular_cliente}}</dd>
                    
                    <dt class="col-sm-5">Telefono</dt>
                    <dd class="col-sm-5">{{ $cliente->telefono_cliente}}</dd>

               </dl>     
          <div>
               <a href="{{ route('Cliente') }}" class="btn btn-danger" role="button">VOLVER</a>
          </div>

     
@endsection