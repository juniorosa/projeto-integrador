//tela de alterar foto
$('#alterar-foto').click(function(){
    $('main').load('viewAlterarFoto.php');
});
//tela de alterar OS
$('#alterar-os').click(function(){
    $('main').load('viewAlterarOS.php');
});
//tela de alterar clientes
$('#alterar-clientes').click(function(){
    $('main').load('viewAlterarClientes.php');
});
//tela de gerenciamento de datasheet
$('#gerenciar-ds').click(function(){
    $('#gerenciar-ds').html('<i class="fa fa-spinner fa-spin"></i>');
    $('main').load('viewListarDatasheet.php');
    //gira o spinner por 2 segundos
    setTimeout(function(){
        $('#gerenciar-ds').html('<i class="material-icons">insert_drive_file</i>Gerenciar Datasheets');
    }, 2000);
    
});

//tela de gerenciamento de imagens
$('#gerenciar-img').click(function(){
    $('main').load('viewGerenciarImagensPrincipal.php');
});

//tela adicionar usuarios
$('#add-usuario').click(function(){
    $('main').load('viewAddUsuarios.php');
});

//tela remover usuario
$('#remove-usuario').click(function(){
    $('#remove-usuario').html('<i class="fa fa-spinner fa-spin"></i>');
    $('main').load('viewRemoveUsuario.php');
    //gira o spinner por 2 segundos
    setTimeout(function(){
        $('#remove-usuario').html('<i class="material-icons">delete</i>Remover Usuario');
    }, 2000);
});

//tela adicionar senha
$('#altera-senha').click(function(){
    $('main').load('viewAlteraSenha.php');
});

//tela adicionar login
$('#altera-login').click(function(){
    $('main').load('viewAlteraLogin.php');
});