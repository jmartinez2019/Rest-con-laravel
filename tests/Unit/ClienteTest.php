<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class ClienteTest extends TestCase {

    public function testPruebaGET() {
        $r = $this->json('GET', 'api/clientes');
        $r->assertStatus(200)->assertJson(["status" => "ok"]);
    }

    public function testPruebaPOST() {
        $data = ['id' => 1, 'nombre' => 'camilo', 'apellido' => 'martinez', 'email' => 'jmartinez@existaya.com', 'telefono' => '3206419532'];
        $r = $this->json('POST', 'api/clientes', $data);
        $r->assertStatus(200)->assertJson(["status" => "ok"]);
    }

    public function testPruebaPUT() {
        $data = ['id' => 2, 'nombre' => 'camiloModificado', 'apellido' => 'martinez', 'email' => 'jmartinez@existaya.com', 'telefono' => '3206419532'];
        $r = $this->json('PUT', 'api/clientes/1', $data);
        $r->assertStatus(200)->assertJson(["status" => "ok", "data" => "Se actualizo correctamente"]);
    }

    public function testPruebaSHOW() {
        $r = $this->json('GET', 'api/clientes/2');
        $r->assertStatus(200)->assertJson(["status" => "ok"]);
    }

    public function testPruebaDELETE() {
        $r = $this->json('DELETE', 'api/clientes/2');
        $r->assertStatus(200)->assertJson(["status" => "ok", "data" => "Se borro correctamente"]);
    }
    
}
