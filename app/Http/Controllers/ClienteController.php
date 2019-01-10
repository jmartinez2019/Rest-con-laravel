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
        return json_encode(["status"=>"ok","data" => $i],JSON_PRETTY_PRINT);
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

        return json_encode(["status"=>"ok","data" => $cli],JSON_PRETTY_PRINT);


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
          if($cli){
            return json_encode(["status"=>"ok","data" => $cli],JSON_PRETTY_PRINT);
          }else {
            return json_encode(["status"=>"fail","data" => "Ha ocurrido un error"],JSON_PRETTY_PRINT);
          }

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

      return json_encode(["status"=>"ok","data" => "Se actualizo correctamente"],JSON_PRETTY_PRINT);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
      $c = Cliente::find($id);
      if($c){
        $cli = Cliente::destroy($id);
        return  json_encode(["status"=>"ok","data" => "Se borro correctamente"],JSON_PRETTY_PRINT);
      }else {
        return  json_encode(["status"=>"fail","data" => "Ha ocurrido un error"],JSON_PRETTY_PRINT);
      }



    }
}
