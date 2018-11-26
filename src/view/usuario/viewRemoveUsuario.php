<?php /*
session_start();
    require "../database/dadosConect.php";
    require "../database/conectDB.php";
    require "../database/selectDB.php";
    $id_user = $_SESSION['id'];
    #select de usuario
    $sql = "SELECT id_user, nome, foto_usuario FROM usuario WHERE id_user != {$id_user} ";
    $result = $link->query($sql) or die($link->error);*/
?>

    <div class="container">
        <div class="row">
            <form class="col s12 m8 l8 offset-m2 offset-l2 hoverable z-depth-5 alinhar-view" action="" method="post">
                <h3 class="light center-align">Remover Usuario</h3>
                <div class="row">
                    <div class="input-field col s12 m6 l6 offset-m3 offset-l3">
                        <select name="id-usuario">
                            <option value="" disabled selected>Usuario</option>
                            <?php
                                /*
                                while($dados = $result->fetch_array()){
                                    if($dados[2] == ""){
                                        $fotoUsuarios = "usuario.png";
                                    }
                                    else{
                                        $fotoUsuarios = $dados[2];
                                    }
                                    echo"
                                        <option value=\"$dados[0]\" data-icon=\"../images/fotos-user/$fotoUsuarios\" class=\"left circle\">$dados[1]</option>
                                    ";        
                                }*/
                            ?>
                            <option value="1" data-icon="../assets/images/fotos-user/usuario.png" class="left circle">Nome do usuario 1</option>
                            <option value="2" data-icon="../assets/images/fotos-user/usuario.png" class="left circle">Nome do usuario 2</option>
                            <option value="3" data-icon="../assets/images/fotos-user/usuario.png" class="left circle">Nome do usuario 3</option>
                        </select>
                        <label>Escolher usuario</label>
                    </div>

                    <div class="input-field col s12 m8 l8 offset-m2 offset-l2">
                        <i class="material-icons prefix">lock</i>
                        <input id="senha" name="senha" type="password" class="validate" required>
                        <label for="senha">Confirme sua senha*</label>
                    </div>

                </div>
                <button class="btn btn-form waves-effect waves-light green darken-3" type="submit" name="btn-remover-usuario">Remover
                    <i class="material-icons right">delete</i>
                </button>

            </form>
        </div>
    </div>
    <script>
    //select
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>