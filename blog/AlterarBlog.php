<?php

include_once "../servico/Autenticacao.php";

include_once "../servico/Bd.php";

$id=$_GET["id"];
        
$bd = new Bd();
$sql = "select * from blog where id='$id'";

foreach ($bd->query($sql) as $row) {
    $titulo =  $row['titulo'];
    $corpo =  $row['corpo'];
}


?>
<!doctype html>
<html lang="en">
  <head>
      <link href="https://fonts.googleapis.com/css2?family=Acme&family=Galada&family=Great+Vibes&family=Lobster+Two&family=Niconne&family=Parisienne&family=Sacramento&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="sortcut icon" href="https://cdn.icon-icons.com/icons2/2072/PNG/512/browser_internet_page_security_web_webpage_website_icon_127036.png" type="image/x-icon" />;

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Gerenciamento de usuários</title>
  </head>
  <body>
      <br>
    <div class="container">
        
        <h1>Tela de alteração do texto
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder2-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
</svg>
        </h1>
         <hr>
        
       <br>
        
        <form action="salvarBlog.php">
          <div class="form-group">
              
          
            <label for="exampleInputEmail1">Usuário</label>
            <?php
            
            echo "<input type='hidden' name='id' value='$id' >";
            
            echo "<input type='text' name='titulo' class='form-control' value='$titulo'  >";
            
            ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <?php
            echo "<input type='text' name='corpo' class='form-control' value='$corpo'  >";
            
            ?>

          </div>
          
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="Submit" class="btn btn-secondary">Salvar</button>
            <button type="button" class="btn btn-secondary"><a href="ConsultaBlog.php">Voltar</a></button>
          </div>
         
        </form>

       
        <br><br>
   </div> <!-- container -->
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
    <style>
        .container{
                
                background-color: white;
                border-radius: 40px;
                border: 2px solid #f6f6f6;
                -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.10);
        		-moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.10);
        		box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.10);
            }

h1{
            text-align: center;
            font-family: Lobster Two;
        }

a{
            color:white;
        }
        
         body{
                background-color: #DCDCDC;
            }
    </style>
     
  </body>
</html>