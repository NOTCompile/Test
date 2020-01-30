@extends('plantilla')

@section('seccion')
  <div class="container">
    <h1 class="display-4">Electromatic Industrial S.R.L.</h1>
    <h2 class="display-10">Sistema de Inventario</h2>
    <h3 class="display-10">Iniciar Sesion</h3>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" class="">
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">E-mail</label>
              <div class="col-10">
                <input type="email" class="form-control" id="inputmailh" placeholder="mail@example.com"> </div>
            </div>
            <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label">Password</label>
              <div class="col-10">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Password"> </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection