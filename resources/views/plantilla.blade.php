<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  
</head>
<style>
  #opcion:hover{ background: #FFAD01 !important; color: white }
</style>

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
          <a href="{{ route('Producto') }}" id="opcion" class="list-group-item list-group-item-action text-alig-justify"><i class="fa fa-bolt"></i> Grupos Electrogenos</a>
          <a href="{{ route('Cliente') }}" id="opcion" class="list-group-item list-group-item-action text-alig-justify"><i class="fa fa-users"></i> Clientes</a>
          <a href="{{ route('Usuario') }}" id="opcion" class="list-group-item list-group-item-action text-alig-justify"><i class="fa fa-user"></i> Usuarios</a>
          <a href="{{ route('Login') }}" id="opcion" class="list-group-item list-group-item-action text-alig-justify"><i class="fa fa-id-card"></i> Login</a>
          <a href="#" id="opcion" class="list-group-item list-group-item-action active text-alig-justify" style="background:red"><i class="fa fa-sign-in"></i> Cerrar sesion</a>
        </ul>
      </div>

      <div class="col-md-10 p-0" >        
        <div class="py-4 text-center" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .70), rgba(0, 0, 0, .30)), url('https://www.descubrir.com/wp-content/uploads/2019/11/Plaza-1.jpg');background-size:cover;">
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
  <div class="py-2 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0 text-white" >© Todos los derechos reservados Electromatic Industrial | Arequipa - Perú</p>
        </div>
      </div>
    </div>
  </div>

 
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>