<?php 
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário De Autores</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<<<<<<< HEAD
        <link rel="stylesheet" href=" {{ asset('css/form.css ')}}" />
=======
        <link rel="stylesheet" href=" {{ asset('css/formautor.css ')}}" />
>>>>>>> 4e95d8d920ee90c23ae948ad9e765df61fe647ef

    </head>
    <body >
        <div class="container">
            
            <div id="form-main">
                
                <div id="form-div">
<<<<<<< HEAD
                    <h1> Adicionar autor</h1>
                    <form class="montform" method="post" action="" id="reused_form" >
                        <p class="name">
                            <input name="nome" type="text" class="feedback-input" required placeholder="Nome" id="nome" />
                        </p>
<!--
                        <p class="autor">
                            <input name="id_autores" type="texto" required class="feedback-input" id="autor" placeholder="Nome Do Autor" />
                        </p>
-->
			'				  <p class="name">
                            <input name="sobrenome" type="text" class="feedback-input" required placeholder="Sobrenome" id="nome" />
                        </p>
            
=======
                    <h1> Adicionar Autores</h1>
                    <form class="montform" method="post" action="" id="reused_form" >
                        <p class="tit">
                            <input name="titulo" type="text" class="feedback-input" required placeholder="Nome Completo" id="nome" />
                        </p>

>>>>>>> 4e95d8d920ee90c23ae948ad9e765df61fe647ef
							  
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