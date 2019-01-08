<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        $i = Cliente::all();
        return $i;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return con 'vista'
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cli = new Cliente();
        $cli->id = $request->id;
        $cli->nombre = $request->nombre;
        $cli->apellido = $request->apellido;
        $cli->email = $request->email;
        $cli->telefono = $request->telefono;
        $cli->save();

        return "Se ha almacenado correctamente el usuario ".$cli->nombre;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $cli = Cliente::find($id);
          return $cli;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        //return vista
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
      $cli = Cliente::find($id);
      $cli->id = $request->id;
      $cli->nombre = $request->nombre;
      $cli->apellido = $request->apellido;
      $cli->email = $request->email;
      $cli->telefono = $request->telefono;
      $cli->save();

      return "Se actualizo correctamente el usuario con id: ".$cli->id;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $nit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
          $cli = Cliente::destroy($id);
          return  "Se borro correctamente";
    }
}
