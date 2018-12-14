<?php 
include 'modelAuthor.php';

if (isset($_POST['cadastrar'])) {

    $modelo = new ModelAuthor();

    $author = new Author();
    $author->setNome($_POST['nome']);
    $author->setSobrenome($_POST['sobrenome']);
    $author->setNacionalidade($_POST['nacionalidade']);
    $author->setData_nasc($_POST['data_nasc']);


    $modelo->adicionar($author);

}

?>