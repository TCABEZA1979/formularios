<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form  action="" method="post">
         {{ csrf_field()}}

            <input  type="hidden" id="id_edit" name="id" >
         <div class="form-group">
           <label for="">Cedula</label>
           <input  class="form-control" id="Cedula_edit"  name="cedula" placeholder="Cedula" required>
         </div>
         <div class="form-group">
           <label for="">Nombre</label>
           <input  class="form-control" id="Nombre_edit" name="nombre" placeholder="Nombre" required>
         </div>
         <div class="form-group">
           <label for="">Apellido</label>
           <input  class="form-control" id="Apellido_edit" name="apellido" placeholder="Apellido" required>
         </div>
         <div class="form-group">
           <label for="">Direccion</label>
           <input  class="form-control" id="Direccion_edit"  name="direccion" placeholder="Direccion" required>
         </div>
         <div class="form-group">
           <label for="">Correo</label>
           <input  class="form-control" id="meil_edit" type="email"  name="meil" placeholder="Correo" required>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>

let addToCart = button => {




$("#id_edit").val(button.getAttribute('data-id'));
$("#Cedula_edit").val(button.getAttribute('data-cedula'));
$("#Nombre_edit").val(button.getAttribute('data-nombre'));
$("#Apellido_edit").val(button.getAttribute('data-apellido'));
$("#Direccion_edit").val(button.getAttribute('data-direccion'));
$("#meil_edit").val(button.getAttribute('data-meil'));

}










</script>
