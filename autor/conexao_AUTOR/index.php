<?php 
    include 'controllerUser.php';
?>
<!DOCTYPE html>
<html> 
<head>
<meta charset="UTF-8">

<link href="css/bootstrap.min.css" rel="stylesheet" >


<link href="css/meuestilo.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
<form method="POST" action ="index.php">
    
    <!--Campo Nome-->
    <div class="form-group">
<label for="nome">Nome:</label>
<input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Primeiro nome" class="forma text text-muted">
</div>
    
     <!--Campo Sobrenome-->
    <div class="form-group">
<label for="sobrenome">Sobrenome:</label>
<input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Sobrenome" class="forma text text-muted">
</div>
    
    <!--Campo Nacionalidade-->
    <div class="form-group">
<label for="nacionalidade">Nacionalidade:</label>
<input type="text" class="form-control" id="nacionalidade" name="nacionalidade" aria-describedby="nacionalidadeHelp" placeholder="Nacionalidade" class="forma text text-muted">
</div>

    
    <!--campo Data de Nascimento-->
    <div class="form-group">
<label for="date">Data de Nascimento:</label>
<input type="date" class="form-control" id="date" name="date" aria-describedby="dateHelp" placeholder="Entrar com a data:">
<small id="datelHelp" class="form-date text-muted">.</small>
</div>
    
    <!--campo Gêneros Principais-->
    <div class="form-group">
<label for="Generos">Gêneros Principais:</label>
<input type="Generos" class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" name="Generos" id="Generos" placeholder="Generos">
</div>
    
    
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-danger" name="cadastrar">Enviar Autor</button>
</form>


<table border='1'>
<form action="" method="POST">

<tr>
<td align="center"><b>Primeiro Nome</b></td>
<td><input type="text" name="nome">
<?php echo $campo_obrigatorio; ?></td>
</tr>
    
<tr>
<td align="center"><b>Sobrenome</b></td>
<td><input type="text" name="nome">
<?php echo $campo_obrigatorio; ?></td>
</tr> 
    
<tr>
<td align="center"><b>Nacionalidade</b></td>
<td><input type="text" name="nome">
<?php echo $campo_obrigatorio; ?></td>
</tr>
    
<tr>
<td colspan="2">
<input type="submit" name="enviar" value="ok">
</td>
</tr>

</form>
</table>

</div>
</body> 
</html>