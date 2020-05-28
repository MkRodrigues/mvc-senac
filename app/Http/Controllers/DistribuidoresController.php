<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Distribuidores;

class DistribuidoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Distribuidores::all();
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
        $json = $request->getContent();
        return Distribuidores::create(json_decode($json, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $distribuidor = Distribuidores::find($id);
        if ($distribuidor) {
            return $distribuidor;
        } else {
            return json_encode([$id => 'Nao Existe']);
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
        $distribuidor = Distribuidores::find($id);
        if ($distribuidor) {
            $json = $request->getContent();
            $atualizacao = json_decode($json, JSON_OBJECT_AS_ARRAY);
            $distribuidor->nome = $atualizacao['nome'];
            $ret = $distribuidor->update() ? [$id => 'Atualizado'] : [$id => 'Erro'];
        } else {
            $ret = [$id => 'Nao existe'];
        }

        return json_encode($ret);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distribuidor = Distribuidores::find($id);
        if ($distribuidor) {
            $ret = $distribuidor->delete() ? [$id => 'Apagado'] : [$id => 'Erro'];
        } else {
            $ret = [$id => 'Nao existe'];
        }
        return  json_encode($ret);
    }
}
