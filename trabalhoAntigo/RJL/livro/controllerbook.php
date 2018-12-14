<?php 
include 'modelBook.php';

if (isset($_POST['cadastrar'])) {

    $modelo = new ModelBook();

    $book = new Book();
    $book->setTitulo($_POST['titulo']);
    $book->setDatapub($_POST['datapub']);
    $book->setResumo($_POST['resumo']);
//    $book->setDestaque($_POST['destaque']);
//    $book->setImage('image');
//    $book->setId_autores($_POST['id_autores']);
    $book->setId_genero($_POST['id_genero']);
    $book->setId_editora($_POST['id_editora']);
    var_dump($_POST);
    $modelo->adicionar($book);

}

?>