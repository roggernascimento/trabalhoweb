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
                print "<br><b>Deu certo inserir</b>";
        }
     }
     public function editar(){
         
     }
     public function listar(){
        include 'db.php';//criei a conexao
        
        //criei a query
        $query = "SELECT id, nome, sobrenome, nacionalidade, data_nasc  FROM autores order by id DESC LIMIT 20";
        
        //prepara a query
        $statement = $connection->prepare($query);
        
        //executar o comando sql
        $result = $statement->execute();
        
        //juntar todos os resultados do select em um vetor de arrays
        $result = $statement->fetchAll();
        
       /** $u = $result[0];
        echo $u['id']; //vai mostrar 1086
        echo $u['first_name']; //vai mostrar shara
        
        $u = $result[1];
        echo $u['id']; //vai mostrar 1086
        echo $u['first_name']; //vai mostrar shara
        **/
        if(  empty($result) ){
          print "<br>Nao listou";
          print_r(  $statement->errorInfo()  );
        }else{
          print "<br><b>Deu certo listar</b>";
        }
        
        return $result;
        
    
         
     }
     public function remove(){
         
     }
    
                

}

?>