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
                print "<br><b>Deu certo inserir</b>";
        }
     }
     public function editar(){
         
     }
     public function listar(){
           include 'db.php';//criei a conexao
        
        //criei a query
        $query = "SELECT id, titulo, datapub, resumo, id_genero, id_editora FROM livros order by id DESC LIMIT 20";
        
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