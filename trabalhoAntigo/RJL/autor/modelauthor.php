<?php
include 'author.php';

class ModelAuthor {

     public function adicionar(Author $author){
         include 'db.php';
         
         $query = "INSERT INTO autores (nome, sobrenome, nacionalidade, data_nasc ) VALUES (:nome, :sobrenome, :nacionalidade, :data_nasc)";

         $statement = $connection->prepare($query);

         $valores = array();
         $valores[':nome'] = $author->getNome();
         $valores[':sobrenome'] = $author->getSobrenome();
         $valores[':nacionalidade'] = $author->getNacionalidade() ;
         $valores[':data_nasc'] = $author->getData_nasc();
//         $valores[':imagem'] = $book->getImage();

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