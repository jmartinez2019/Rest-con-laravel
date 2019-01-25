<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  public $table = 'proveedores';
  protected $fillable = [
      'id', 'nombre', 'apellido','ciudad','telefono'
  ];
}
