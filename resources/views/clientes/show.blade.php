@extends('layouts.app')

@section('content')

<body>
    <div class="container col-md-6 my-5">
        <h1 class="text-primary">{{$cliente->nome}}</h1>
        <span>Endereço: </span>
        <p>{{$cliente->endereco}}</p>
        <span>E-mail: </span>
        <p>{{$cliente->email}}</p>
        <span>Telefone: </span>
        <p>{{$cliente->telefone}}</p>
        <a href="{{route('clientes.index')}}" class="btn btn-primary">Voltar</a>
    </div>

</body>

</html>
@endsection