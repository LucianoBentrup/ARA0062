<?php
//sem segurança
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Galada&family=Great+Vibes&family=Lobster+Two&family=Niconne&family=Parisienne&family=Sacramento&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="sortcut icon" href="https://cdn.icon-icons.com/icons2/2072/PNG/512/browser_internet_page_security_web_webpage_website_icon_127036.png" type="image/x-icon" />;

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Gerenciamento de usuários</title>
  </head>
  <body>
      <br>
    <div class="container">
        <br>
        <h1>Gerenciamento do Blog
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
</svg>
        </h1>
        <hr>
          <br><br>
       
       <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary"><a href="../menu.php">Voltar</a></button>
          <button type="button" class="btn btn-secondary"><a href="../index.html">Blog</a></button>
          <button type="button" class="btn btn-secondary"><a href="IncluirBlog.php">Incluir Texto</a></button>
        </div>
       
        <br><br>
        
        <table class="table table-striped table-dark">
            
       <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Corpo</th>
                
            </tr>
        </thead>


        <tbody>
             <?php
        
           $bd = new Bd();
           $sql = "select * from blog";
           
           foreach ($bd->query($sql) as $row) {
                echo "<tr>";
                echo "<th>". $row['id'] . "</th>";
                echo "<th>". $row['titulo'] . "</th>";
                echo "<th>". $row['corpo'] . "</th>";
                
                echo "<th><a href='#' onclick ='Pergunta(". $row['id'] . ")'> Excluir</a></th>";
                
                echo "<th><a href='AlterarBlog.php?id=". $row['id'] . "'>Alterar</a></th>";
                echo "</tr>";
            }
           
        
         ?>
            </tbody>
            </table>
            
        
        
      </div>
        <script>
        function Pergunta(id) {

          if (confirm("Deseja realmente excluir ?")) {
            window.location.replace("https://aula-php-luciano.000webhostapp.com/blog/ExcluirBlog.php?id="+id);

          }
        }
        </script>

       
    
    
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
     
     <script>
         
         $(document).ready(function() {
            $('#example').DataTable();
        } );

     </script>
     
     <style>
      
        .container{
                text-align: center;
                background-color: white;
                border-radius: 40px;
                border: 2px solid #f6f6f6;
                -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.10);
        		-moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.10);
        		box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.10);
            }
      
        .btn-group a{
            color: white;
        }
        
        h1{
            text-align: center;
            font-family: Lobster Two;
        }
        
         body{
                background-color: #DCDCDC;
            }
          
     </style>
     
  </body>
</html>