@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Clientes</h2>
        </div>
        <div class="pull-right">

            <a class="btn btn-success" href=" {{route('clientes.create')}}"> + Novo cliente</a>

        </div>
    </div>
</div>
<br>

@if ($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif


<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nome Cliente</th>
        <th>Endereço</th>
        <th>E-mail</th>
        <th>Teste</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($clientes as $cliente)

    <tr>
        <td>{{ $cliente->id }}</td>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->endereco }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $cliente->telefone }}</td>
        <td>
            <a class="btn btn-info" href="{{route('clientes.show', $cliente->id)}}">Mostrar</a>
            <a class="btn btn-primary" href="{{route('clientes.edit', $cliente->id)}}">Editar</a>

            <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" href="">Apagar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection