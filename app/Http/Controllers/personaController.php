<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
class personaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $persona = persona::all();
    return view('personas',compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "hola";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $personas= new persona();

      $personas->nombre=$request->nombre;
      $personas->apellido=$request->apellido;
      $personas->cedula=$request->cedula;
      $personas->direccion=$request->direccion;
      $personas->meil=$request->meil;

      $personas->save();
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
      // $alumno = Alumno::find($id);
      //     $alumno->fill($request->all());
      //     $alumno->save();
      //     return redirect()->action([AlumnoController::class, 'index']);

  echo "hola";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
