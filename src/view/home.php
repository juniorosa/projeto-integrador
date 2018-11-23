<?php 
/*
session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../index.php");
    }else{
        $nome  = $_SESSION['nome'];
        $email = $_SESSION['email'];
        $foto  = $_SESSION['foto'];
        require "../database/dadosConect.php";
        require "../database/conectDB.php";
        require "../database/selectDB.php";
        
        if($foto == ''){
            $foto = "usuario.png";
        }
        require "includes/mensagens.inc.php";
    }
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    
   <!-- <link rel="icon" href="../images/favicon.jpg"> -->
    <title>Home</title>
    <style>
        h4{ text-align: center; color: #fff;}
    </style>
</head>

<body>
    <!-- cabeçalho -->
    <?php require "includes/header.inc.php"; ?> 
    <!-- barra lateral -->
    <ul id="slide-out" class="side-nav fixed">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="../assets/images/fundo-sidenav.jpg">
                </div>
                <a id="alterar-foto" href="#"><div class="circle" style="background-image: url('../assets/images/fotos-user/usuario.png');"></div></a>
                <a href="#!name"><span class="white-text name">Nome do usuario</span></a>
                <a href="#!email"><span class="white-text email">email@teste.com</span></a> 
            </div>
        </li>
        <li><a href="../scripts/logout.php"><i class="material-icons">exit_to_app</i>Sair</a></li>
        <li><a class="waves-effect" href="home.php"> <i class="material-icons">home</i>Início</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">opções</a></li>
        <li><a id="add-usuario" class="waves-effect" href="#"><i class="material-icons">add</i>Adicionar Usuario</a></li>
        <li><a id="remove-usuario" class="waves-effect" href="#"><i class="material-icons">delete</i>Remover Usuario</a></li>
        <li><a id="altera-senha" class="waves-effect" href="#"><i class="material-icons">lock</i>Alterar Senha</a></li>
        <li><a id="altera-login" class="waves-effect" href="#"><i class="material-icons">account_circle</i>Alterar Login</a></li>
    </ul>
    <!-- conteudo principal -->
    <main>
      
    </main>
    
    <?php
        require "includes/footer.inc.php"; 
    ?> 
   <!-- <script src="../js/paginas.js"></script> -->
    <?php 
        //form alterar foto
        if(isset($_POST['btn-alterar-foto'])){
            alterarFoto($link);
            ?>
            <script> window.location.assign("home.php");</script>
            <?php
        }
    
    ?>
</body>
</html>