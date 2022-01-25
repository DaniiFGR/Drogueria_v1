@extends('invitado.master')
@section('contenido')
<div class="container"><br>
  <h2><center>Catálogo de Productos</center></h2><br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @for($i = 0 ; $i < 10 ; $i++) 
    <div class="col">
      <div class="card">
        <img src='{{url("/img/img1.png")}}' height="200" class="d-block w-100" alt="...">
        <div class="card-body">
          <h5 class="card-title">producto {{ $i }}</h5>
          <p class="card-text">Esta es la descripción del producto</p>
        </div>
      </div>
    </div>
    @endfor
  </div>
</div>
@stop