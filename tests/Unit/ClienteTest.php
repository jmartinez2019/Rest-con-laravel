<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClienteTest extends TestCase
{

    public function testPruebaPOST()
  {
    $r =  $this->json('POST','api/clientes',['id'=>10,'nombre'=>'camilo','apellido'=>'martinez','email'=>'jmartinez@existaya.com','telefono'=>'3206419532']);

    $r->assertStatus(200);
  }

  public function testPruebaPUT()
  {
    $r =  $this->json('PUT','api/clientes/100',['id'=>100,'nombre'=>'camiloModificado','apellido'=>'martinez','email'=>'jmartinez@existaya.com','telefono'=>'3206419532']);

    $r->assertStatus(200);
  }

  public function testPruebaDELETE()
  {
    $r =  $this->json('DELETE','api/clientes/100');

    $r->assertStatus(200);
  }

  public function testPruebaGET()
  {
    $r =  $this->json('GET','api/clientes');

    $r->assertStatus(200);
  }

  public function testPruebaSHOW()
  {
    $r =  $this->json('GET','api/clientes/100');

    $r->assertStatus(200);
  }






}
