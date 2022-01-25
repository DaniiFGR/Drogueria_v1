@extends('admin.master')
@section('contenido')
<div class="container"><br>
  <h2>
    <center>Facturas de Ventas</center>
  </h2><br>
  <table id="table_admin_pro" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Total</th>
        <th>Más</th>
      </tr>
    </thead>
    <tbody>
      @for($i = 0 ; $i < 100 ; $i++) <tr>
        <td>{{ $i }}</td>
        <td>Compra {{ $i }}</td>
        <td>00-00-0000</td>
        <td>{{ $i * 5}}</td>
        <td style="width: 200px;">
          <button type="button" class="btn btn-primary"><i class="bi bi-three-dots"></i></button>
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
        <th>Fecha</th>
        <th>Total</th>
        <th>Más</th>
      </tr>
    </tfoot>
  </table>
</div>
@stop