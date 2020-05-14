<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clientes;
use App\Http\Requests\CreateClientesRequest;
use App\Http\Requests\EditClientesRequest;

class ClientesController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:cliente-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:cliente-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:cliente-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:cliente-delete', ['only' => ['destroy']]);
    }

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


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
            'endereco' => 'required',
            'email' => 'required',
            'telefone' => 'required'
        ]);

        $cliente = Clientes::find($id);
        $input = $request->all();
        $cliente->update($input);

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }


    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente apagado com Sucesso!');
    }
}
