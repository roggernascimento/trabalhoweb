Lista de usuarios

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