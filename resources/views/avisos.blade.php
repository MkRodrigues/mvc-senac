<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quadro de avisos da Empresa')</title>
</head>
<body>

@extends('layouts.externo')

@section('sidebar')
@parent
<p>Barra Superior</p>
@endsection

<!-- @section('content')
<p>Quandro de Avisos da Empresa</p>
@endsection -->

@section('container')
<ul>
    <li><a href="#">Teste</a></li>
    <li><a href="#">Teste</a></li>
    <li><a href="#">Teste</a></li>
</ul>

@endsection

<p>Olá {{$nome}}</p>

@if($mostrar)
Mostrando aviso
@else
Escondendo aviso
@endif

@foreach ($avisos as $aviso)
<p>Aviso {{$aviso['id']}}:{{$aviso['texto']}}</p>
@endforeach

<?php
foreach($avisos as $aviso){
echo "Aviso {{$aviso['id']}}:{{$aviso['texto']}}";
}
?>

</body>
</html>