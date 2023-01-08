<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form v-on:submit.prevent="updateArticulos(articulo.id,articulo.nombre,articulo.descripcion,articulo.marca,articulo.proveedor,articulo.almacen,articulo.codigo)"  >
          <!-- {{ csrf_field()}}  v-on:submit.prevent="updateArticulos(articulo.id,articulo.nombre,articulo.descripcion,articulo.codigo,articulo.marca,articulo.proveedor,articulo.almacen)" -->
           @csrf

           <div class="form-group" >

             <input type="hidden" id="ids" name="id"  v-model="articulo.id"  >
           </div>
          <div class="form-group">
            <label for=""></label>
            <input  class="form-control" id="nombres" name="nombre" placeholder="Nombre"  v-model="articulo.nombre"  >
          </div>
          <div class="form-group">
            <label for="">Descripcion</label>
            <input  class="form-control" id="descripcions" name="descripcion"  v-model="articulo.descripcion">
          </div>
          <div class="form-group">
            <label for="">Codigo</label>
            <input  class="form-control" id="codigos" name="codigo"   v-model="articulo.codigo">
          </div>
          <div class="form-group">
            <label for="">Marca</label>
            <input  class="form-control" id="marcas"  name="marca" v-model="articulo.marca">
          </div>
          <div class="form-group">
            <label for="">Proveedor</label>
            <input  class="form-control" id="proveedors"  name="proveedor" v-model="articulo.proveedor">
          </div>
          <div class="form-group">
            <label for="">Almacen</label>
            <input  class="form-control" id="almacens"   name="almacen"   v-model="articulo.almacen">
          </div>

          <button type="submit"   class="btn btn-warning">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-paper-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6.5 9.5 3 7.5v-6A1.5 1.5 0 0 1 4.5 0h7A1.5 1.5 0 0 1 13 1.5v6l-3.5 2L8 8.75l-1.5.75ZM1.059 3.635 2 3.133v3.753L0 5.713V5.4a2 2 0 0 1 1.059-1.765ZM16 5.713l-2 1.173V3.133l.941.502A2 2 0 0 1 16 5.4v.313Zm0 1.16-5.693 3.337L16 13.372v-6.5Zm-8 3.199 7.941 4.412A2 2 0 0 1 14 16H2a2 2 0 0 1-1.941-1.516L8 10.072Zm-8 3.3 5.693-3.162L0 6.873v6.5Z"/>
            </svg>
          </button>
        </form>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
