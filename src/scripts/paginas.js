// Função para fechar a Side Nav ao selecionar um link
function sideNavClose(){
    var tamanhoTela = window.innerWidth;
    if(tamanhoTela <= 990){
        $('.button-collapse').sideNav('hide');
    }
}

//tela de alterar foto
$('#alterar-foto').click(function(){
    $('main').load('viewAlterarFoto.php');
    sideNavClose()
});

//tela adicionar usuarios
$('#add-usuario').click(function(){
    $('main').load('viewAddUsuarios.php');
    sideNavClose()
});

//tela remover usuario
$('#remove-usuario').click(function(){
    $('#remove-usuario').html('<i class="fa fa-spinner fa-spin"></i>');
    $('main').load('viewRemoveUsuario.php');
    //gira o spinner por 2 segundos
    setTimeout(function(){
        $('#remove-usuario').html('<i class="material-icons">delete</i>Remover Usuario');
    }, 2000);
    sideNavClose()
});

//tela alterar senha
$('#altera-senha').click(function(){
    $('main').load('viewAlteraSenha.php');
    sideNavClose()
});

//tela alterar login
$('#altera-login').click(function(){
    $('main').load('viewAlteraLogin.php');
    sideNavClose()
});