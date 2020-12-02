<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://aula-php-luciano.000webhostapp.com/menu.php');
    </script>
    ";
    
}

?>