<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$titulo=$_GET["titulo"];
$corpo=$_GET["corpo"];

if (isset($_GET["id"])) { //atualiza
    $id = $_GET["id"];
    $sql = "update `blog` set titulo='$titulo', corpo='$corpo' where id='$id' ";
}else { //grava um novo
    $sql = "INSERT INTO `blog` (`id`, `titulo`, `corpo`) VALUES (NULL, '$titulo', '$corpo')";    
}

$bd = new Bd();
$contador = $bd->exec($sql);

?>

<!DOCTYPE html>

<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Acme&family=Galada&family=Great+Vibes&family=Lobster+Two&family=Niconne&family=Parisienne&family=Sacramento&display=swap" rel="stylesheet">
      <link rel="sortcut icon" href="https://cdn.icon-icons.com/icons2/2072/PNG/512/browser_internet_page_security_web_webpage_website_icon_127036.png" type="image/x-icon" />;
      <title>
          Verificação Completa!
      </title>
    </head>

<body>
    <br>
    <div class="container">
        
        <h1>Foi adicionado/alterado 1 registro com sucesso!</h1>
         <button type="button" class="btn btn-secondary"><a href="ConsultaBlog.php">Voltar</a></button>
        
    </div>

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