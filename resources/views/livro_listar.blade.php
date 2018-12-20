<?php 
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário De Livros</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset('css/form.css ')}}" />

<style type='text/css'>
table {
width: 15%;
border: 5px solid #C5B798;
margin-top: 15px;
margin-bottom: 25px;
}
td {
border-bottom: 1px solid #CDC1A7;
padding: 5px;
}
th {
font-family: "Trebuchet MS", Arial, Verdana;
font-size: 17px;
padding: 5px;
border-bottom-width: 1px;
border-bottom-style: solid;
border-bottom-color: #CDC1A7;
background-color: #CDC1A7;
color: #993300;
}
</style>
</head>

<body>
<table>
  <tr>
    <th>Título</th>
    <th>Data de Publicação</th> 
  </tr>
 
        <?php foreach(  $lista_livros    as  $l ) {  ?>
        <tr>
            <?php echo '<td>'.$l['titulo'].'</td>'; echo '<td>'.$l['ediçao'].'</td>'; ?>
         </tr>
        <?php 
            }
        ?>
</table>
</body>
</html>