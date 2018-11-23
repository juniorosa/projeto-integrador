<?php
    require "../test/logar.php";
    if(isset($_POST['entrar'])){
        logar();  

    }
    require "includes/mensagens.inc.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <?php 
        if(!isset($_COOKIE['conectado'])){
            require "includes/formLogin.inc.php";
        }
        else{
            $login = $_COOKIE['login'];
            $senha = $_COOKIE['senha'];
            //validarCookies($link, $login, $senha);
                      
        }
    ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>

</html>