<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return json_encode(["status"=>"ok","data" => $proveedores],JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->id = $request->id;
        $proveedor->nombre = $request->nombre;
        $proveedor->apellido = $request->apellido;
        $proveedor->ciudad = $request->ciudad;
        $proveedor->telefono = $request->telefono;
        $proveedor->save();

          return json_encode(["status"=>"ok","data" => $proveedor],JSON_PRETTY_PRINT);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $proveedor = Proveedor::find($id);
      if($proveedor){
        return json_encode(["status"=>"ok","data" => $proveedor],JSON_PRETTY_PRINT);
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
      $proveedor =  Proveedor::find($id);
      $proveedor->id = $request->id;
      $proveedor->nombre = $request->nombre;
      $proveedor->apellido = $request->apellido;
      $proveedor->ciudad = $request->ciudad;
      $proveedor->telefono = $request->telefono;
      $proveedor->save();

        return json_encode(["status"=>"ok","data" => $proveedor],JSON_PRETTY_PRINT);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pro = Proveedor::find($id);
      if($pro){
        $pro = Proveedor::destroy($id);
        return  json_encode(["status"=>"ok","data" => "Se borro correctamente"],JSON_PRETTY_PRINT);
      }else {
        return  json_encode(["status"=>"fail","data" => "Ha ocurrido un error"],JSON_PRETTY_PRINT);
      }
    }
}
