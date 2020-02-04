<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  
</head>

<body>
  
  <nav class="navbar navbar-dark" style="background:#FFAD01">
    <div class="container d-flex justify-content-center"> <a class="navbar-brand" href="#" >
      <img src="http://gruposelectrogenosei.com/img/grupos-electrogenos-arequipa.jpg">
      </a> </div>
  </nav>
  <div class="py-0">
    <div class="row">
      <div class="col-md-2 p-0" style="background:#FFAD01">
        <ul class="list-group text-center">
          <a href="{{ route('Producto') }}" class="list-group-item list-group-item-action"> Grupos Electrogenos</a>
          <a href="{{ route('Cliente') }}" class="list-group-item list-group-item-action">Clientes</a>
          <a href="{{ route('Usuario') }}" class="list-group-item list-group-item-action">Usuarios</a>
          <a href="{{ route('Login') }}" class="list-group-item list-group-item-action">Login</a>
          <a href="#" class="list-group-item list-group-item-action disabled active">Cerrar sesion</a>
        </ul>
      </div>

      <div class="col-md-10 p-0" >        
        <div class="py-4 text-center" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .70), rgba(0, 0, 0, .10)), url('https://blog.redbus.pe/wp-content/uploads/2019/04/YTQP-AREQUIPA-DESTINO-1.jpg');background-size:cover;">
          <div class="container">
            <div class="row">
              <div class="bg-white p-4 mx-auto col-md-12 col-10 border shadow-lg">
                @yield('seccion')
                                
              </div>
            </div>
          </div>
        </div>
      </div>
        
      </div>
    </div>
  </div>
  <div class="py-3 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0 text-white" >© Todos los derechos reservados Electromatic Industrial | Arequipa - Perú</p>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSF1Bw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
</body>

</html>