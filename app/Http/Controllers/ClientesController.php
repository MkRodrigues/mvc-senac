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

    // index
    // create
    // store
    // show
    // edit
    // update
    // destroy


    public function index(Request $request)
    {
        $data = Clientes::orderBy('id', 'DESC')->paginate(5);
        return view('clientes.index', compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function show($id)
    {
        return view('clientes.show')->with('cliente', Clientes::find($id));
    }

    public function edit($id)
    {
        $user = Clientes::find($id);
        return view('clientes.edit', compact('cliente'));
    }





    public function listar()
    {
        $clientes = Clientes::all();
        return view('clientes.listar', ['clientes' => $clientes]);
    }

    public function create()
    {
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
