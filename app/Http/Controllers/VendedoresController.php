<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendedores;

class VendedoresController extends Controller
{

    public function index()
    {
        return Vendedores::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $json = $request->getContent();
        return Vendedores::create(
            json_decode($json, JSON_OBJECT_AS_ARRAY)
        );
    }


    public function show($id)
    {
        $vendedor = Vendedores::find($id);
        if ($vendedor) {
            return $vendedor;
        } else {
            return json_encode([$id => 'nao existe']);
        }
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $vendedor = Vendedores::find($id);
        if ($vendedor) {
            $json = $request->getContent();
            $atualizacao = json_decode($json, JSON_OBJECT_AS_ARRAY);
            $vendedor->nome = $atualizacao['nome'];
            $ret = $vendedor->update() ? [$id => 'atualizado'] : [$id => 'erro'];
        } else {
            $ret = [$id => 'nao existe'];
        }
        return json_encode($ret);
    }


    public function destroy($id)
    {
        $vendedor = Vendedores::find($id);
        if ($vendedor) {
            $ret = $vendedor->delete() ?
                [$id => 'apagado'] : [$id => 'erro'];
        } else {
            $ret = [$id => 'nao existe'];
        }
        return json_encode($ret);
    }

    public function checkVendedor(int $idVendedor): bool
    {
        $vendedores = [
            1 => 'Marcos',
            2 => 'Amanda',
            3 => 'Lucas',
            4 => 'Rgina'
        ];
        return array_key_exists($idVendedor, $vendedores);
    }

    // ? na frente do retorno mostra a função que pode ser retornado uma string ou nulo
    public function getVendedor(int $idVendedor): ?string
    {
        $vendedores = [
            1 => 'Marcos',
            2 => 'Amanda',
            3 => 'Lucas',
            4 => 'Rgina'
        ];
        return $vendedores[$idVendedor] ?? null;
        // ??null é uma abreviação de operador ternário que retorna null se a afirmação for falsa
    }

    public function getJson()
    {
        return json_encode(['nome' => 'Mikael']);
    }

    public function comecaCom()
    {
        return 'Mikael';
    }

    public function ehNumero(): int
    {
        return 1;
    }

    public function formatoCerto()
    {
        $pontoFlutuante = 100.0;
        return $pontoFlutuante;
    }
}
