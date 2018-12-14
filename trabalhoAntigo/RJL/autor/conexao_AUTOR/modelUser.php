<?php
include'user.php';

$sql_atr = "SELECT * FROM atores WHERE nome= {$id}";
$valor->listaatr = $this->db->query($sql_atr)->result();

class ModelUser {

     public function adicionar(User $user){
         include 'bd.php';
         
         $query = "INSERT INTO users (nome, sobrenome,data,nacionalidade,generos) VALUES (:nome, :sobrenome, :data, :nacionalidade, :generos)";

         $statement = $connection->prepare($query);

         $valores = array();
         $valores[':first_name'] = $user->getFirstName();
         $valores[':last_name'] = $user->getLastName();
         $valores[':nacionalidade'] = $user->getNacionalidade() ;
         $valores[':data'] = $user->getData_Nasc();
         $valores[':generos'] = $user->getGeneros();

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
     public function remover(){
         
     }
    
                

}

?>