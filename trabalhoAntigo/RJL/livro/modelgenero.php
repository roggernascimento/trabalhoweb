<?php
include'genero.php';

class ModelGenero {

     public function adicionar(Genero $genero){
         include 'db.php';
         
         $query = "INSERT INTO genero (descricao) VALUES (:descricao)";

         $statement = $connection->prepare($query);

         $valores = array();
         $valores[':descricao'] = $book->getDescricao();
        

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