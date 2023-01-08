<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articulo;
class articuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulo = articulo::all();
        return view('articulos');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $articulo = new articulo();
      $articulo->nombre = $request->nombre;
      $articulo->descripcion = $request->descripcion;
      $articulo->codigo = $request->codigo;
      $articulo->marca = $request->marca;
      $articulo->almacen = $request->almacen;
      $articulo->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $articulo = new articulo();
      $articulo->nombre = $request->nombre;
      $articulo->descripcion = $request->descripcion;
      $articulo->codigo = $request->codigo;
      $articulo->marca = $request->marca;
      $articulo->proveedor = $request->proveedor;
      $articulo->almacen = $request->almacen;
      $articulo->save();
      return response()->json($articulo);
      // $articulo->create($request->all());




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $articulo = articulo::all();


    return response()->json($articulo);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $articulo = articulo::find($id);
      return response()->json($articulo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $articulo = articulo::findOrFail($id);
         $articulo->nombre = $request->nombre;
         $articulo->descripcion = $request->descripcion;
         $articulo->codigo = $request->codigo;
         $articulo->marca = $request->marca;
         $articulo->proveedor = $request->proveedor;
         $articulo->almacen = $request->almacen;
         $articulo->save();
        return response()->json($request->all());

      // return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $articulo = articulo::find($id);
      $articulo->delete();

     return response()->json($id);

    }
}
