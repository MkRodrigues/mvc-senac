<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Página Principal')</title>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet" ">
    
</head>

<body>

    <header>
        <div id="linha-1">
            <h1 id="titulo">REPENSE!</h1>

            <div id="login">
                <form id="formulario" action="#">
                    <div id="input-1"><input type="text" name="name" class="campo" placeholder="Insira seu nome"></div>
                    <div id="input-2"><input type="text" name="password" class="campo" placeholder="Insira sua senha"></div>
                </form>
            </div>
        </div>

        <nav id="linha-2">
            <ul>
                <li><a href="#">Roupas</a></li>
                <li><a href="#">Acessórios</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">

        <div class="produtos">
            <!-- Pega info do banco e visualiza através de Foreach -->

            

        </div>

    </div>

</body>

</html>