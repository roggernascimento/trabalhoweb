<?php 
    include 'controllerAuthor.php';
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário De Autores:</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form2.css">
<!--        <script src="form.js"></script>-->
    </head>
    <body >
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" method="post" action="" id="reused_form" >
                        <p class="nome">
                            <input name="nome" type="text" class="feedback-input" required placeholder="Nome" id="nome" />
                        </p>
                        <p class="sobrenome">
                            <input name="sobrenome" type="texto" required class="feedback-input" id="sobrenome" placeholder="Sobrenome" />
                        </p>
			'				  <p class="nacionalidade">
                            <input name="nacionalidade" type="text" class="feedback-input" required placeholder="Nacionalidade" id="nacionalidade" />
                        </p>
                        
                         <p class="data_nasc">
                            <input name="data_nasc" type="date" class="feedback-input" required placeholder="Data De Nascimento:" id="data" />
                        </p>
                        
<!--
                        <p class="imagem">
                            <input name="image" type="text" class="feedback-input" required placeholder="imagem" id="image" />
                        </p>
-->
					  
                        <div class="submit">
                            <button name="cadastrar" type="submit" class="button-blue">Enviar</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Erro
                        </h4>
Desculpe, houve um erro ao enviar seu formulário.
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>
Sucesso! Sua mensagem foi enviada com sucesso.</h2> </div>
                </div>
            </div>
            <table class="table  table-dark" style="background-color: white; width: 35%";>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nome</th>
          <th scope="col">sobrenome</th>
          <th scope="col">nacionalidade</th>
          <th scope="col">data_nasc</th>
          
        </tr>
      </thead>
      <tbody>

       

        <?php  foreach (  $author as $u )  {  ?>
            <tr>
             <th scope="row"><?php echo $u["id"];   ?></th>
              <td><?php echo $u["nome"];   ?></td>
                <td><?php echo $u["sobrenome"];   ?></td>
              <td> <?php echo $u["nacionalidade"];?>  </td>
             <td> <?php echo $u["data_nasc"];?>  </td>
            </tr>
        <?php } ?>


      </tbody>
      </table>
        </div>
    </body>
</html>