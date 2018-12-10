@extends('layout')

@section('titulo', 'Bem vindo!')

@section('conteudo')

    <p>livro:
        {{ $livro['nome'] }} !</p>
    
    <?php // echo $usuario['nome'].'
    //'.$usuario['sobrenome'] ?>

<h4> Lista de livros </h4>

@foreach ($lista_livros as $u) 
    {{$u['nome']}}
@endforeach

@endsection
