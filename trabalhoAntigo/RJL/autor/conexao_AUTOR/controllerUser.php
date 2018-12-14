<?php 
include 'modelUser.php';

if (isset($_POST['cadastrar'])) {

$modelo = new ModelUser();

$user= new User();
$user->setNome($_POST['nome']);
$user->setSobrenome($_POST['sobrenome']);
$user->setNacionalidade($_POST['nacionalidade']);
$user->setData_Nasc($_POST['data_nasc']);
$user->setGeneros($_POST['generos']);

$modelo->adicionar($user);

}
var_dump($_POST);

$campo_obrigatorio = "";

if (isset($_POST['enviar'])){
    if( empty($_POST['nome'])  ){
        
        $campo_obrigatorio = "Este campo é obrigatório!";
    }else
        echo "<br><b>".$_POST['nome']."</b>";

}

if (isset($_POST['enviar'])){
    if( empty($_POST['sobrenome'])  ){
        
        $campo_obrigatorio = "Este campo é obrigatório!";
    }else
        echo "<br><b>".$_POST['sobrenome']."</b>";

}

?>