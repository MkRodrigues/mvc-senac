<?php

namespace Tests\Feature;

use App\Clientes;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientesTest extends TestCase
{

    use DatabaseTransactions;

    public function testCreate()
    {
        $cliente = Clientes::create([
            'nome' => 'Bono Teste',
            'endereco' => 'Planeta Terra',
            'email' => 'mikael@gmail.com',
            'telefone' => '119999999'
        ]);
        $this->assertDatabaseHas('Clientes', ['nome' => 'Bono Teste']);
        // $cliente->destroy($cliente->id);
        // $this->assertDatabaseMissing('Clientes', ['nome' => 'Bono Teste']);
    }
}
