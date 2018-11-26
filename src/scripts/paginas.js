// Função para fechar a Side Nav ao selecionar um link
function sideNavClose(){
    var tamanhoTela = window.innerWidth;
    if(tamanhoTela <= 990){
        $('.button-collapse').sideNav('hide');
    }
}

//tela de alterar foto
$('#alterar-foto').click(function(){
    $('main').load('usuario/viewAlterarFoto.php');
    sideNavClose()
});

//tela adicionar usuarios
$('#add-usuario').click(function(){
    $('main').load('usuario/viewAddUsuarios.php');
    sideNavClose()
});

//tela remover usuario
$('#remove-usuario').click(function(){
    $('main').load('usuario/viewRemoveUsuario.php');
    sideNavClose()
});

//tela alterar senha
$('#altera-senha').click(function(){
    $('main').load('usuario/viewAlteraSenha.php');
    sideNavClose()
});

//tela alterar login
$('#altera-login').click(function(){
    $('main').load('usuario/viewAlteraLogin.php');
    sideNavClose()
});

$('#add-vaga').click(function(){
    $('main').load('vagas/viewAddVaga.php');
    sideNavClose()
});