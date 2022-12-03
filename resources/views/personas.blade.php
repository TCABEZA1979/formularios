@extends('index')
@section('content')
<div class="container-fluid">
   <div class="row">
    <div class="col-5">
      <form  action="{{url('/registrarpersona')}}" method="post">
        {{ csrf_field()}}
        <div class="form-group">
          <label for="">Cedula</label>
          <input  class="form-control" id="Cedula" aria-describedby="emailHelp" name="cedula" placeholder="Cedula" required>
        </div>
        <div class="form-group">
          <label for="">Nombre</label>
          <input  class="form-control" id="Nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
          <label for="">Apellido</label>
          <input  class="form-control" id="Apellido" name="apellido" placeholder="Apellido" required>
        </div>
        <div class="form-group">
          <label for="">Direccion</label>
          <input  class="form-control" id="Apellido"  name="direccion" placeholder="Direccion" required>
        </div>
        <div class="form-group">
          <label for="">Correo</label>
          <input  class="form-control" id="meil" type="email"  name="meil" placeholder="Correo" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-7">

          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Cedula</th>
              <th>Apellido</th>
              <th>Direccion</th>
              <th>Correo</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
              <td>Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>5</td>
              <td>C</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>Cedula</th>
              <th>Apellido</th>
              <th>Direccion</th>
              <th>Correo</th>
              <th>Acciones</th>
            </tr>
            </tfoot>
          </table>

      </div>
    </div>
</div>
@endsection
