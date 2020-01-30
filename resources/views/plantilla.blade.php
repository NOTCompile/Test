<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Grupos Electrogenos</title>
  </head>

  <style>
    nav{ background: #FFAD01 }
  </style>
  {{-- style="background-image:url(https://venngage-wordpress.s3.amazonaws.com/uploads/2018/11/15-Presentation-Background-Examples33.png)" --}}
  <body>   
    <nav class="navbar navbar-expand-sm navbar-light">
        
          <a class="navbar-brand" href="{{ route('Inicio') }}">
            <img src="http://gruposelectrogenosei.com/img/grupos-electrogenos-arequipa.jpg" class="img-fluid">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="{{ route('Producto') }}" class="navbar-brand" style="color:">Grupos Electrogenos</a>
              </li>
              <li class="nav-item">
                <a  href="{{ route('Cliente') }}" class="navbar-brand" style="">Clientes</a>
              </li>
              <li class="nav-item">
                <a  href="{{ route('Usuario') }}" class="navbar-brand" style="">Usuario</a>
              </li>
              <li class="nav-item dropdown">
                <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manuales
                </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Grupos Electrogenos</a>
                    <a class="dropdown-item" href="#">TTA</a>
                    <a class="dropdown-item" href="#">...</a>
                  </div>
              </li>
            </ul>
          
  </nav>
    <!-- Contenedor-->
      <div class="container-fluid" style="background:#3B3C3D">
            @yield('seccion')      
      </div>
   
    <!-- Footer-->
    <div class="container-fluid pt-2 pb-2" style="background:#000000; color:white; text-align:center; bottom:0; position:fixed">
      ©Todos los Derechos Reservados Electromatic Industrial S.R.L | Arequipa - Perú
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>