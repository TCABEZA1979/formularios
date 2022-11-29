<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <form  class="form-group"  action="{{url('/registrousuario')}}" method="post">
                {{ csrf_field()}}
                <table align="center">
                    <div class="form-group">
                        <label  for="">Cédula</label>
                        <input type="text" class="form-group "  name="cedula" placeholder="Cedula" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-group" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Apellido</label>
                        <input type="text" class="form-group" name="apellido" placeholder="Apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="">Dirección</label>
                        <input type="text" class="form-group" name="direccion" placeholder="Direccion" required>
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="email" class="form-inline" name="meil" placeholder="Correo" required>
                    </div>
                    <button class="btn btn-primary btn-success">registrar</button>
                </table>
            </form>

        </div>
    </div>
</div>
