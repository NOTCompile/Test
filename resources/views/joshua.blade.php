@extends('plantilla')

@section('seccion')
     <form method="post" action="{{url('form')}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="input-group control-group increment">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
            </div>
          </div>
          <div class="clone hide" style="">
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
     </div>

     <div class="container">
<input type="time" name="" value="00:00">

<input type="date" name="" value="00:00">
     </div>
     <form>
      <div>
        <label for="appt-time">Choose an appointment time (opening hours 12:00 to 18:00): </label>
        <input id="appt-time" type="time" name="appt-time"
               min="12:00" max="18:00" required
               pattern="[0-9]{2}:[0-9]{2}">
        <span class="validity"></span>
      </div>
      <div>
          <input type="submit" value="Submit form">
      </div>
    </form>

      <script type="text/javascript" style="">
        $(document).ready(function() {
          $(".btn-success").click(function() {
            var html = $(".clone").html();
            $(".increment").after(html);
          });
          $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
          });
        });
      </script>


@endsection