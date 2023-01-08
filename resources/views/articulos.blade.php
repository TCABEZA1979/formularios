@extends('index')
@section('content')
<div class="container-fluid" id="articulo">
   <div class="row">
    <div class="col-4" >
      <form  action=""  >
        <!-- {{ csrf_field()}} -->
         @csrf


        <div class="form-group">
          <label for="">Nombre</label>
          <input  class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" v-model="nombre"  value="">
        </div>
        <div class="form-group">
          <label for="">Descripcion</label>
          <input  class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion"  v-model="descripcion">
        </div>
        <div class="form-group">
          <label for="">Codigo</label>
          <input  class="form-control" id="codigo" name="codigo" placeholder="Codigo"  v-model="codigo">
        </div>
        <div class="form-group">
          <label for="">Marca</label>
          <input  class="form-control" id="marca"  name="marca" placeholder="Marca"  v-model="marca">
        </div>
        <div class="form-group">
          <label for="">Proveedor</label>
          <input  class="form-control" id="proveedor"  name="proveedor" placeholder="proveedor"  v-model="proveedor">
        </div>
        <div class="form-group">
          <label for="">Almacen</label>
          <input  class="form-control" id="almacen"   name="almacen" placeholder="Almacen"  v-model="almacen">
        </div>

        <button type="button" @click="createArticulos(id)" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-symlink-fill" viewBox="0 0 16 16">
            <path d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z"/>
          </svg>
        </button>
      </form>
    </div>
    <div class="col-8"  >

          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Codigo</th>
              <th>Marca</th>
                <th>proveedor</th>
              <th>Almacen</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
              <tr v-for="articulo in articulos" :key="articulo.id"  v-bind:my="articulo" v-bind:key="articulo.id">
              <td>@{{articulo.nombre}}</td>
              <td>@{{articulo.descripcion}} </td>
              <td>@{{articulo.codigo}}</td>
              <td>@{{articulo.marca}}</td>
              <td>@{{articulo.proveedor}}</td>
              <td>@{{articulo.almacen}}</td>
              <td>
                <div class="btn-group">
                   <button type="button" @click="deleteArticulos(articulo.id)"  class="btn btn-danger">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                       <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                     </svg>
                   </button>
                    <button

                     type="button" class="btn btn-warning" @click="editArticulos(articulo.id)" data-toggle="modal" data-target="#exampleModal"  @click="get_art(articulo.id,articulo.nombre,articulo.descripcion,articulo.codigo,articulo.marca,articulo.proveedor,articulo.almacen)" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
                      </svg>
                   </button>
@include('modal.articulomodal')
                </div>
              </td>
            </tr>
            </tbody>

            <tfoot>
            <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Codigo</th>
              <th>Marca</th>
              <th>proveedor</th>
              <th>Almacen</th>
              <th>Acciones</th>
            </tr>
            </tfoot>
          </table>

      </div>
    </div>



</div>
<script src="js/vues.js"></script>
<script src="js/axios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/node/axios.cjs.map"></script>
  <!-- <script src="{{ asset('js/app.js') }}"></script> -->
<script>

var app =new Vue({
el:'#articulo',
data: {

  id:'',
  nombre:'',
  descripcion:'',
  marca:'',
  proveedor:'',
  codigo:'',
  almacen:'',

  articulos:[],
  upd_articulo:{
    id:null,
    nombre:'',
    descripcion:'',
    marca:'',
    proveedor:'',
    codigo:'',
    almacen:'',
  },



},

mounted: function () {
  console.log('Hello from Vue!');
this.getArticulos()
},
methods:{

getArticulos:function(){
  axios.get('/articulos/1').then(function(response) {console.log(response.$data);
        app.articulos = response.data;
          }).catch(function (error) {console.log(error);
          });
},

//aqui termina getArticulos

editArticulos:function(id,data){
axios.get('/articulos/' + id + '/edit').then(function(response) {
// console.log(response.data.id);
 $('#ids').val();
$('#nombres').val(response.data.nombre);
$('#descripcions').val(response.data.descripcion);
$('#marcas').val(response.data.marca);
$('#proveedors').val(response.data.proveedor);
$('#codigos').val(response.data.codigo);
$('#almacens').val(response.data.almacen);
// alert(id);
}).catch(function (error) {console.log(error); });

},
//aqui termina editArticulos
get_art(id,nombre,marca,descripcion,proveedor,codigo,almacen){

console.log(id);

 },

updateArticulos:function(id,nombre,descripcion,marca,proveedor,codigo,almacen){
  let datos = {
        nombre: nombre,
        descripcion: descripcion,
        codigo:codigo,
        marca: marca,
        proveedor:proveedor,
        almacen:almacen,
    };
    // console.log(this.upd_articulo);
    console.log("soy datos",datos);

  axios.get('/update/'+id,{
    params: {
      nombre: nombre,
      descripcion: descripcion,
      codigo:codigo,
      marca: marca,
      proveedor:proveedor,
      almacen:almacen,
    }
  }).then((resp) =>{console.log(resp);
  }).catch((e)=>{console.log(e);})
  // axios({ method: 'get', url: '/update/'+id, data: datos,
  // }).then(function (response) {
  // }).catch(function (response) {console.log(response)});


},
//fina de updateArticulos
deleteArticulos:function(id){
  axios.get('http://127.0.0.1:8000/articulos/destroy/' + id).then(function(response) {console.log(response.data);
  						 }).catch(function (error) { console.log(error); });
               app.getArticulos();
               app.resetForm();
},
//aqui termina deleteArticulos
createArticulos:function(id){
const formData = {
      nombre: this.nombre,
      descripcion: this.descripcion,
      marca: this.marca,
      proveedor: this.proveedor,
      codigo: this.codigo,
      almacen: this.almacen
  };
  axios({ method: 'post', url: 'http://127.0.0.1:8000/articulos', data: formData,
  }).then(function (response) {
  }).catch(function (response) {console.log(response)});
  app.getArticulos();
  app.resetForm();
},
//aqui termina createArticulos
resetForm: function(){
this.nombre='';
this.descripcion='';
this.marca='';
this.proveedor='';
this.codigo='';
this.almacen='';
}
},

})
</script>

@endsection
