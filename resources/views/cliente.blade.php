@extends('plantilla')

@section('seccion')
<h1>Cliente</h1>

<h2>HOLA MUNDO</h2>

<html>
     <head>
        <title>SistemaWeb</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <frameset rows="80,*" frameborder="0" bordercolor="#333" marginwidth="10%" marginheight="40" scrolling="no0">
          <frame src="superior.html" name="sup"></frame>
               <frameset rows="80,*" frameborder="0" bordercolor="#333" marginwidth="10%" marginheight="40" scrolling="yes">
                    <frame src="izquierdo.html" name="izq"></frame>
                    <frame src="izquierdo.html" name="izq"></frame>
               </frameset>
     </frameset> 
</html>


@endsection