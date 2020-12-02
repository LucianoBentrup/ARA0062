<?php
include_once "servico/Autenticacao.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Galada&family=Great+Vibes&family=Lobster+Two&family=Niconne&family=Parisienne&family=Sacramento&display=swap" rel="stylesheet">
    
    <link rel="sortcut icon" href="https://cdn.icon-icons.com/icons2/2072/PNG/512/browser_internet_page_security_web_webpage_website_icon_127036.png" type="image/x-icon" />;
    <title>Tela de sistema principal</title>
  </head>
  <body>
      <br>
      <div class="container">
          
              <div id="usuario">
                  <?php
                  
                   echo "<p>".$_SESSION['loginusuario']."</p>";
                    ?>
              </div>
              
              <h1>Bem-vindo usuário</h1>
          
        
            <div id="botao">
                
                <button type="button" class="btn btn-secondary"><a href="index.html">Blog</a></button>
                <button type="button" class="btn btn-secondary"><a href="blog/ConsultaBlog.php">Gerenciamento do Blog</a></button>

               
            </div>
               
     
        <hr>
        <br>      
          
      </div>
      
      <!-- Style do bem vindo-->
      <style>
            h1{
                font-family: lobster two;
                text-align: center;
                
            }
            
            #botao{    
                text-align: center;
                
                
            }
            
            .container{
                background-color: white;
                border-radius: 40px;
                border: 2px solid #f6f6f6;
                -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.10);
        		-moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.10);
        		box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.10);
            }
            
            #usuario{
                text-align: right;
            }
            
            a{
                color: white;
            }
            
            body{
                background-color: #DCDCDC;
            }
        
      </style>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>