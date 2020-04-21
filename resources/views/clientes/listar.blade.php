<!-- @extends('layouts.app'); -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar </title>
</head>

<header>
    @section('content')
</header>

<body>
    <div class="container">
        <table class="table row justify-content-center">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endere&ccedil;o</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
            </tr>

            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente -> nome}}</td>
                <td>{{$cliente -> endereco}}</td>
                <td>{{$cliente -> email}}</td>
                <td>{{$cliente -> telefone}}</td>
            </tr>
            @endforeach

        </table>
        @endsection
    </div>
</body>

</html>