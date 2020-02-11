@extends('plantilla')

@section('seccion')

<style>
  #opc:hover{ background: #055002 !important; }
  </style>

<h3 class="jumbotron">Laravel Multiple File Upload</h3>
<form method="post" action="{{url('form')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>


  <div class="container bg-white">
  <div class="row bg-light align-items-center justify-content-center">        
    <div class="col-sm-12">
        <h1 class="border-bottom h3 pt-3">CONTACTO</h1>
    </div>
    <div class="col-sm-6">            
        <div class="card">
            <div class="card-body">
                <ul>
                    <li>Dirección: Calle Sucre 401 Of. 5 – Cercado – Arequipa</li>
                    <li>Teléfono: (054) 399450</li>
                    <li>servicio_clientes@electromaticindustrial.com</li>
                    <li><a href="http://electromaticindustrial.com" target="_blank">electromaticindustrial.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-6 pb-5 pt-5 bg-warning">
        <h2 class="h4 border-bottom border-dark">FORMULARIO</h2>
        <p>Nos contactaremos contigo a la brevedad posible</p>
        <form action="">
            <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombres y apellidos">                    
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="tel" name="telefono" class="form-control" placeholder="Teléfono">
            </div>
            <div class="form-group">
                <textarea name="mensaje" class="form-control" placeholder="Mensaje"></textarea>
            </div>
            <input type="submit" value="ENVIAR" name="btn" class="btn btn-danger mx-auto d-block">

        </form>
    </div>
    <div class="col-sm-12 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.5983799897535!2d-71.53157568454309!3d-16.394408842367145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDIzJzM5LjkiUyA3McKwMzEnNDUuOCJX!5e0!3m2!1ses-419!2spe!4v1571071090511!5m2!1ses-419!2spe" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>
</div>
  
<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>


@endsection