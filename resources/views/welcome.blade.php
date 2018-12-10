@extends('layout')

@section('titulo', 'Bem vindo!')

@section('conteudo')

    <p>Bem-vindo,
        {{ $usuario['nome'] }}
        {{ $usuario['sobrenome'] }}!</p>
    
    <?php // echo $usuario['nome'].'
    //'.$usuario['sobrenome'] ?>

<h4> Lista de usuários </h4>

@foreach ($lista_usuarios as $u) 
    {{$u['nome']}}
@endforeach

@endsection

