<?php 
include 'modelGenero.php';

if (isset($_POST['cadastrar'])) {

    $modelo = new ModelGenero();

    $genero = new Genero();
    $genero->setDescricao($_POST['descricao']);
  
    var_dump($_POST);
    $modelo->adicionar($genero);

}

?>