<php? 
 
      include("classe/conexão.php");
      
      $consulta ="SELECT * FROM livros";
      $con = mysqli->query($consulta) or die (mysqli->error);
    >

<html>
    <head>
        
    </head>
    <body>
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Nome do Autor</th>
      <th scope="col">Data de Publicação</th>
    </tr>
  </thead>
  <?php while($dado = $con->fetch_array()){ ?>
        <tr> 
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
} <?php } ?>

</table>
    
    </body>




</html>