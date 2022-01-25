@extends('admin.master')
@section('contenido')
<div class="container"><br>
  <h2>
    <center>Catálogo de Marcas</center>
  </h2><br>
  <table id="table_admin_pro" class="table table-striped" style="width:70%;text-align:center;margin-left:15%">
    <thead>
      <tr>
      <th><center>ID</center></th>
        <th>Nombre Marca</th>
        <th>Más</th>
      </tr>
    </thead>
    <tbody>
      @for($i = 0 ; $i < 100 ; $i++)
        <tr>
          <td style="width: 100px;"><center>{{ $i }}</center></td>
          <td style="width: 300px;text-align:left">Marca {{ $i }}</td>
          <td style="width: 150px;">
            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
            <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
          </td>
        </tr>
        @endfor
    </tbody>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Nombre Marca</th>
        <th>Más</th>
      </tr>
    </tfoot>
  </table>
</div>
@stop