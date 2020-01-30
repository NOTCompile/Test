@extends('plantilla')

@section('seccion')
  <img src="https://rciproducciones.files.wordpress.com/2017/01/a540b0498bad80c0269f21900050c899.png?w=1075" style="display:block; margin:auto">

  <div class="row">
    <div class="col-sm-4 pt-5 pb-4 border-left border-right border-bottom border-top">
      <a href="{{ route('Producto') }}" class="text-decoration-none">
        <img src="https://image.flaticon.com/icons/png/128/1546/1546672.png" class="img-fluid mx-auto d-block rounded-circle">
        <p class="text-center mt-3 h3">
          <span class="pt-2 pb-2 pl-4 pr-4 bg-dark text-warning rounded-pill">
          GRUPOS ELECTROGENOS  
          </span> 
        </p>
      </a>
    </div>

    <div class="col-sm-4 pt-5 pb-4 border-left border-right border-bottom border-top">
      <a href="{{ route('Cliente') }}" class="text-decoration-none">
        <img src="https://cdn3.teach.com/content/dd5d78390aca4f02a986fc3823b4ff38/reunion.png" class="img-fluid mx-auto d-block rounded-circle">
        <p class="text-center mt-3 h3">
          <span class="pt-2 pb-2 pl-4 pr-4 bg-dark text-warning rounded-pill">
          CLIENTES  
          </span> 
        </p>
      </a>
    </div>

    <div class="col-sm-4 pt-5 pb-4 border-left border-right border-bottom border-top">
      <a href="{{ route('Usuario') }}" class="text-decoration-none">
        <img src="https://image.flaticon.com/icons/png/128/189/189628.png" class="img-fluid mx-auto d-block rounded-circle">
        <p class="text-center mt-3 h3">
          <span class="pt-2 pb-2 pl-4 pr-4 bg-dark text-warning rounded-pill">
          USUARIOS  
          </span> 
        </p>
      </a>
    </div>

    <div class="col-sm-4 pt-5 pb-4 border-left border-right border-bottom border-top">
      <a href="" class="text-decoration-none">
        <img src="https://cdn1.iconfinder.com/data/icons/help-and-support-flaticon-1/64/files_and_folders-construction_and_tools-manual-instructions-support-education-help-wrench-tools-128.png" class="img-fluid mx-auto d-block rounded-circle">
        <p class="text-center mt-3 h3">
          <span class="pt-2 pb-2 pl-4 pr-4 bg-dark text-warning rounded-pill">
          MANUALES  
          </span> 
        </p>
      </a>
    </div>

    <div class="col-sm-4 pt-5 pb-4 border-left border-right border-bottom border-top">
      <a href="" class="text-decoration-none">
        <img src="" class="img-fluid mx-auto d-block rounded-circle">
        <p class="text-center mt-3 h3">
          <span class="pt-2 pb-2 pl-4 pr-4 bg-dark text-warning rounded-pill">
          ...  
          </span> 
        </p>
      </a>
    </div>

    <div class="col-sm-4 pt-5 pb-4 border-left border-right border-bottom border-top">
      <a href="" class="text-decoration-none">
        <img src="" class="img-fluid mx-auto d-block rounded-circle">
        <p class="text-center mt-3 h3">
          <span class="pt-2 pb-2 pl-4 pr-4 bg-dark text-warning rounded-pill">
          ...  
          </span> 
        </p>
      </a>
    </div>

  </div>

@endsection