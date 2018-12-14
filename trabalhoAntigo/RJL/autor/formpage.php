<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário De Autores</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
<!--        <script src="form.js"></script>-->
    </head>
    <body >
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" method="post" action=""  id="reused_form" >
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Primeiro Nome do Autor" id="name" />
                        </p>
                        <p class="name">
                            <input name="name" type="texto" required class="feedback-input" id="name" placeholder="Sobrenome Do Autor" />
                        </p>
						
						<p class="name">
                            <input name="name" type="texto" required class="feedback-input" id="name" placeholder="Nacionalidade Do Autor" />
						
                        </p>
							  <p class="data">
							  <h4><font color="#CFCFCF">Data de Nascimento do Autor:</font></h4>
							 
                            <input name="name" type="date" class="feedback-input" required placeholder="Data De Nascimento do Autor" id="data" />
                       
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="comment" placeholder="Gêneros Principais do Autor"></textarea>
                        </p>
							  
                        <div class="submit">
                            <button type="submit" class="button-blue">Enviar</button>
                            <div class="ease"></div>
                        </div>
                   
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