<?php
include'book.php';

class ModelBook {

     public function adicionar(Book $book){
         include 'db.php';
         
         $query = "INSERT INTO livros (titulo, datapub, resumo, id_genero, id_editora ) VALUES (:titulo, :datapub, :resumo, :id_genero, :id_editora)";

         $statement = $connection->prepare($query);

         $valores = array();
         $valores[':titulo'] = $book->getTitulo();
         $valores[':datapub'] = $book->getDatapub();
         $valores[':resumo'] = $book->getResumo() ;
//         $valores[':destaque'] = $book->getDestaque();
//         $valores[':imagem'] = $book->getImage();
//         $valores[':id_autores'] = $book->getId_autores();
         $valores[':id_genero'] = $book->getId_genero();
         $valores[':id_editora'] = $book->getId_editora();

         $result = $statement->execute($valores);

         if(  empty($result) ){
                print "<br>Nao inseriu";
                print_r( $statement->errorInfo());
         }else{
                print "<br>Deu certo inserir";
        }
     }
     public function editar(){
         
     }
     public function listar(){
         
     }
     public function remove(){
         
     }
    
                

}

?>