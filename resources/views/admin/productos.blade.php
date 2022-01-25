@extends('admin.master')
@section('contenido')
<div class="container"><br>
  <h2>
    <center>Catálogo de Productos</center>
  </h2><br>
  <table id="table_admin_pro" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Marca</th>
        <th>Categoría</th>
        <th>Precio</th>
        <th>Más</th>
      </tr>
    </thead>
    <tbody>
      @for($i = 0 ; $i < 100 ; $i++) 
        <tr>
          <td>{{ $i }}</td>
          <td>Producto {{ $i }}</td>
          <td>descripción</td>
          <td>Marca</td>
          <td>Categoría</td>
          <td>{{ $i * 5}}</td>
          <td>
            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
            <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
          </td>
        </tr>
      @endfor
    </tbody>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Marca</th>
        <th>Categoría date</th>
        <th>Precio</th>
        <th>Más</th>
      </tr>
    </tfoot>
  </table>
</div>
@stop