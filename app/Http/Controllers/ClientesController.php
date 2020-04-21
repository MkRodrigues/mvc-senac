<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{

    public function __controller()
    {
        $this->middleware('auth');
    }


    public function listar()
    {
        $clientes = Clientes::all();
        return view('clientes.listar', ['clientes' => $clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store()
    {
        $data = request()->all();
        $clientes = new Clientes();
        // dd($data);

        $clientes->nome = $data['name'];
        $clientes->endereco = $data['address'];
        $clientes->email = $data['email'];
        $clientes->telefone = $data['phone'];

        $clientes->save();
        return redirect('clientes/listar');
    }
}
