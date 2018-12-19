@extends('layout')

@section('titulo', 'Bem vindo!')

@section('conteudo')
<style type='text/css'>
table {
  width: 15%;
  border: 5px solid #C5B798;
  margin-top: 15px;
  margin-bottom: 25px;
}
td {
  border-bottom: 1px solid #CDC1A7;
  padding: 5px;
}
th {
  font-family: "Trebuchet MS", Arial, Verdana;
  font-size: 17px;
  padding: 5px;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-bottom-color: #CDC1A7;
  background-color: #CDC1A7;
  color: #993300;
}
</style>


    <p>Autor:
        {{ $autor['nome'] }}</p>
    
    <?php // echo $usuario['nome'].'
    //'.$usuario['sobrenome'] ?>

<h3> Lista de Autores </h3>

@foreach ($lista_autores as $u) 
<table cellspacing="0" cellpadding="3">
  <tr>
    <th scope="col">{{$u['nome']}}</th>
  </tr>
    </table>
@endforeach
<!--
 <table border="8px solid red">
    <th>{{$u['nome']}} </th>
-->
@endsection
