<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clientes;
use App\Http\Requests\CreateClientesRequest;
use App\Http\Requests\EditClientesRequest;

class ClientesController extends Controller
{

    public function index(Request $request)
    {
        $clientes = Clientes::orderBy('id', 'DESC')->paginate(15);
        return view('clientes.index', compact('clientes'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('clientes.create');
    }


    public function store(CreateClientesRequest $request)
    {
        Clientes::create($request->all());
        session()->flash('success', 'Cliente criado com sucesso!');
        return redirect(route('clientes.index'));
    }


    public function show($id)
    {
        return view('clientes.show')->with('cliente', Clientes::find($id));
    }


    public function edit(Clientes $cliente)
    {
        return view('clientes.edit')->with('cliente', $cliente);
    }


    public function update(Request $request, Clientes $cliente)
    {
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->save();

        session()->flash('success', 'Cliente editado com sucesso!');
        return redirect(route('clientes.index'));
    }


    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente apagado com Sucesso!');
    }
}
