<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\VendedoresController;

class VendedoresControllerTest extends TestCase
{

    private $vendedores;

    public function __construct()
    {
        parent::__construct();
        $this->vendedores = new VendedoresController;
    }

    public function testCheckVendedor()
    {
        $this->assertTrue($this->vendedores->checkVendedor(1));
        $this->assertFalse($this->vendedores->checkVendedor(0));
    }

    public function testGetVendedor()
    {
        $this->assertEquals('Marcos', $this->vendedores->getVendedor(1));
    }

    public function testIndex()
    {
        $this->assertJson($this->vendedores->getJson());
    }

    // Testa se uma string inicia com o valor especificado
    public function testCount()
    {
        $this->assertStringStartsWith('Mikael', $this->vendedores->comecaCom());
    }

    // Testa se o valor recebido não é um número
    public function notaNumber()
    {
        $this->assertNan($this->vendedores->ehNumero());
    }

    // Testa se o formato ponto flutuante é o formato passado na função formatoCerto()
    public function correctFormat()
    {
        $this->assertStringMatchesFormat('%f', $this->vendedores->formatoCerto());
    }
}
