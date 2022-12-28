@extends('index')
@section('content')
<div class="container-fluid">
   <div class="row">
    <div class="col-4" >
      <form  action="" method="post">
        <!-- {{ csrf_field()}} -->
         <!-- @csrf -->
        <div class="form-group">
          <label for="">Nombre</label>
          <input  class="form-control" id="nombre" name="nombre" placeholder="Nombre" required v-model="nombre">
        </div>
        <div class="form-group">
          <label for="">Descripcion</label>
          <input  class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" required v-model="descripcion">
        </div>
        <div class="form-group">
          <label for="">Codigo</label>
          <input  class="form-control" id="codigo" name="codigo" placeholder="Codigo" required v-model="codigo">
        </div>
        <div class="form-group">
          <label for="">Marca</label>
          <input  class="form-control" id="marca"  name="marca" placeholder="Marca" required v-model="marca">
        </div>
        <div class="form-group">
          <label for="">Almacen</label>
          <input  class="form-control" id="almacen" type="almacen"  name="almacen" placeholder="Almacen" required v-model="almacen">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-8" id="articulo" >

          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Codigo</th>
              <th>Marca</th>
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
              <td>@{{articulo.almacen}}</td>
              <td>
                <div class="btn-group">

                  <button type="button" class="btn btn-warning">update</button>


                   <button type="button" class="btn btn-danger">delete</button>

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
<script>

var app =new Vue({
el:'#articulo',
data: {
  nombre:'',
  descripcion:'',
  marca:'',
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
  axios.get('http://127.0.0.1:8081/articulos/1').then(function(response) {
        console.log(response.data);
        app.articulos = response.data;

          }).catch(function (error) {
          console.log(error);
          });

},




},


})





</script>

@endsection
