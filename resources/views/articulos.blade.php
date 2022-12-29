@extends('index')
@section('content')
<div class="container-fluid" id="articulo">
   <div class="row">
    <div class="col-4" >
      <form  action="" method="post" >
        <!-- {{ csrf_field()}} -->
         @csrf
        <div class="form-group">
          <label for="">Nombre</label>
          <input  class="form-control" id="nombre" name="nombre" placeholder="Nombre"  v-model="nombre" >
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
        <input type="button" @click="createArticulos()" value="Add" class="btn btn-primary">

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

                  <button type="button" class="btn btn-warning">update</button>


                   <button type="button" class="btn btn-danger"  >delete</button>

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
  <script src="{{ asset('js/app.js') }}"></script>
<script>

var app =new Vue({
el:'#articulo',
data: {
  nombre:'',
  descripcion:'',
  marca:'',
  proveedor:'',
  codigo:'',
  almacen:'',

  articulos:[],
},

mounted: function () {
  console.log('Hello from Vue!');
this.getArticulos()
},
methods:{
getArticulos:function(){
  axios.get('/articulos/1').then(function(response) {
        console.log(response.data);
        app.articulos = response.data;

          }).catch(function (error) {
          console.log(error);
          });

},
createArticulos:function(){
//arreglar
const formData = {
    nombre: this.nombre,
    descripcion: this.descripcion,
    marca: this.marca,
    proveedor: this.proveedor,
    codigo: this.codigo,
    almacen: this.almacen
};
console.log(formData);
axios({
    method: 'post',
    url: 'http://127.0.0.1:8000/store',
    data: formData,
    // config: { headers: {'Content-Type': 'multipart/form-data' }}
}).then(function (response) {
    console.log(response)

}).catch(function (response) {
   console.log(response)
});

app.getArticulos();
app.resetForm();





  },
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
