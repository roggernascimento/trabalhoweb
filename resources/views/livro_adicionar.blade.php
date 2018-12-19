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

    </head>
    <body >
        <div class="container">
            
            <div id="form-main">
                
                <div id="form-div">
                    <h1> Adicionar Livros</h1>
                    <form class="montform" method="post" action="" id="reused_form" >
                        <p class="tit">
                            <input name="titulo" type="text" class="feedback-input" required placeholder="Título" id="titulo" />
                        </p>
<!--
                        <p class="autor">
                            <input name="id_autores" type="texto" required class="feedback-input" id="autor" placeholder="Nome Do Autor" />
                        </p>
-->
			'				  <p class="data">
                            <input name="datapub" type="text" class="feedback-input" required placeholder="Edição" id="data" />
                        </p>
            
							  
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