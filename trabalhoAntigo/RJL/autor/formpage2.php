<?php 
    include 'controllerAuthor.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
 
        <title>Formulário De Autores:</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form2.css" >
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
        </div>
    </body>
</html>