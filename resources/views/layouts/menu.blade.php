<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Página Principal')</title>
    <style>
        body,
        h1,
        h2,
        p {
            margin: 0px;
            padding: 0px;
            list-style: none;
            text-decoration: none;
        }

        body {
            font-family: 'Montserrat', Helvetica, Arial, sans-serif;
            color: #000000;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li,
        a {
            text-decoration: none;
        }

        #login {
            display: flex;
            align-self: center;
            padding-right: 50px;
        }

        #linha-1 {
            display: flex;
            width:100%;
            height: 60px;
            background: #ace;
            justify-content: space-between;
        }

        #titulo {
            align-self: center;
            padding-left: 50px;

        }

        #linha-2 {
            display: flex;
            width: 100%;
            background: gray;
            justify-content: flex-start;
        }
        #formulario {
            display: flex;

        }

        #input-1, #input-2 {
            padding: 0px 5px;
        }

        .campo {
            width: 190px;
            height: 25px;
            background: white;
            border: 1px solid #fff;
            border-radius: 1px;
            color: #fff;
            font-family: 'Montserrat', Helvetica, Arial, sans-serif;
            font-size: 15px;
            padding-left: 5px;
        }

        /* Menu - Links */
        #linha-2 ul{
            display: flex;
            padding: 0 50px;
        }

        #linha-2 ul li a {
            padding: 0px 10px;
            color: white;
        }

    </style>
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