  <html>
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
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

{{--<img src="https://rciproducciones.files.wordpress.com/2017/01/a540b0498bad80c0269f21900050c899.png?w=1075" style="display:block; margin:auto">--}}

</html>