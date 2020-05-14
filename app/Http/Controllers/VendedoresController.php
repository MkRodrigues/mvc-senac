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
}
