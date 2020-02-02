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
      <img src="http://gruposelectrogenosei.com/img/grupos-electrogenos-arequipa.jpg" class="img-fluid">
      </a> </div>
  </nav>
  <div class="py-0">
    <div class="row">
      <div class="col-md-2 p-0 bg-info">
        <ul class="list-group text-center">
          <a href="{{ route('Producto') }}" class="list-group-item list-group-item-action"> Grupos Electrogenos</a>
          <a href="{{ route('Cliente') }}" class="list-group-item list-group-item-action">Clientes</a>
          <a href="{{ route('Usuario') }}" class="list-group-item list-group-item-action">Usuarios</a>
          <a href="{{ route('Login') }}" class="list-group-item list-group-item-action">Login</a>
          <a href="#" class="list-group-item list-group-item-action disabled active">Cerrar sesion</a>
        </ul>
      </div>

      <div class="col-md-10 p-0" >        
        <div class="py-4 text-center" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .40), rgba(0, 0, 0, .20)), url('https://www.cideteq.mx/wp-content/uploads/2018/07/PORTADA.jpg');background-size:cover;" >
          <div class="container">
            <div class="row">
              <div class="bg-white p-4 mx-auto col-md-12 col-10 border shadow">
                @yield('seccion')
                
                
              </div>
            </div>
          </div>
        </div>
        

      </div>
        
      </div>
    </div>
  </div>
  <div class="py-3 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2014-2018 Pingendo. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>