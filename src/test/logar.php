<?php
//session_start();
//require "../../config/database/dadosConect.php";
//require "../../config/database/conectDB.php";
//require "../../config/database/selectDB.php";

function logar(){
    //$duracao = time() + 60 * 60 * 24 * 30 * 6;
    //proteção sql
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    

    //criptografa
    //$senha = hash("sha512", $senha);

    /*faz o select
    $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
    $resultado = $link->query($sql);

    //se der resultado pega os dados no banco
    if($link->affected_rows > 0 ){            
        $dados = $resultado->fetch_array();
        $id    = $dados['id_user'];
        $nome  = $dados['nome'];
        $email = $dados['email'];
        $foto  = $dados['foto_usuario'];
        $login = $dados['login'];
        $senha = $dados['senha'];
        $admin = $dados['is_admin'];
        //cria as variaveis de sessão
        $_SESSION['email'] = $email;
        $_SESSION['id']    = $id;
        $_SESSION['nome']  = $nome;
        $_SESSION['foto']  = $foto;
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['isAdmin'] = $admin;

        # testar se o checkbox foi marcado
        if (isset($_POST['conectado'])) {
            # se foi marcado cria o cookie
            setcookie("conectado", "sim", $duracao, "/");
            # neste ponto, tambem enviamos para o navegador os cookies de login e senha, com validade de 6 meses
            setcookie("login" , $login, $duracao, "/");
            setcookie("senha" , $senha, $duracao, "/");
        }*/
        if($login == 'admin' && $senha == 'admin'){
       ?>
        <script> location.href="home.php" </script>
       <?php
    }
    else{
        $_SESSION['msg'] = "Senha ou usuario Incorreto!";
    }

    //$link->close();
}