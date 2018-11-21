<?php 
    
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
    <link rel="stylesheet" href="index.css">
    
    <title>Sistema de divulgação de vagas de emprego e estágio</title>
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="green darken-1 z-depth-2">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo">Logo</a>
                        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="large material-icons">menu</i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a class="modal-trigger" href="#modal2">Anunciar vagas</a></li>
                            <li><a href="#" class="waves-effect btn green darken-2">Login<i class="material-icons right">account_circle</i></a></li>
                        </ul>
                    </div>
                </div>
    
        </div>
        <!-- menu mobile -->
        <ul id="mobile-menu" class="side-nav">
            <li><a class="modal-trigger" href="#modal2">Anunciar vagas</a></li>
            <li><a href="#">Login</a></li>
    
        </ul>
    </header>

    <div class="filtro-busca">
        <div class="row">
            <div class="input-field col s12 l3 offset-l1">
                <input id="search" type="search" required>
                <label for="search"><i class="material-icons">search</i></label>
            </div>
    
            <div class="input-field col s12 l2">
                <select>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Estagio</option>
                    <option value="2">efetivo(CLT)</option>
                    <option value="3">Temporario</option>
                    <option value="4">Concurso publico</option>
                    <option value="5">Prestador de serviço</option>
                    <option value="6">outro</option>
                </select>
                <label>Tipo de contrato</label>
            </div>
    
            <div class="input-field col s12 l2">
                <select>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Tecnico de informatica</option>
                </select>
                <label>Curso</label>
            </div>
    
            <div class="input-field col s12 l3">
                <select>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Florianopolis</option>
    
                </select>
                <label>Cidade</label>
    
            </div>
    
        </div>
    
    </div>

    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="card z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Tipo de vaga</span>
                            <p>Cod. vaga 001</p>
                            <p>Titulo da vaga: Suporte técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em GTI, Tecnico de informática</p>
                            <p>Empresa: Tips tecnologia</p>
                            <p>Valor</p>
                            <p>Carga horaria</p>
                            <p>Cidade</p>
                            <p>Cadastrado em:</p>
                        </div>
                        <div class="card-action center-align">
                            <a class="modal-trigger" href="#modal1">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Tipo de vaga</span>
                            <p>Cod. vaga 001</p>
                            <p>Titulo da vaga: Suporte técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em GTI, Tecnico de informática</p>
                            <p>Empresa: Tips tecnologia</p>
                            <p>Valor</p>
                            <p>Carga horaria</p>
                            <p>Cidade</p>
                            <p>Cadastrado em:</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Tipo de vaga</span>
                            <p>Cod. vaga 001</p>
                            <p>Titulo da vaga: Suporte técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em GTI, Tecnico de informática</p>
                            <p>Empresa: Tips tecnologia</p>
                            <p>Valor</p>
                            <p>Carga horaria</p>
                            <p>Cidade</p>
                            <p>Cadastrado em:</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Tipo de vaga</span>
                            <p>Cod. vaga 001</p>
                            <p>Titulo da vaga: Suporte técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em GTI, Tecnico de informática</p>
                            <p>Empresa: Tips tecnologia</p>
                            <p>Valor</p>
                            <p>Carga horaria</p>
                            <p>Cidade</p>
                            <p>Cadastrado em:</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Tipo de vaga</span>
                            <p>Cod. vaga 001</p>
                            <p>Titulo da vaga: Suporte técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em GTI, Tecnico de informática</p>
                            <p>Empresa: Tips tecnologia</p>
                            <p>Valor</p>
                            <p>Carga horaria</p>
                            <p>Cidade</p>
                            <p>Cadastrado em:</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Tipo de vaga</span>
                            <p>Cod. vaga 001</p>
                            <p>Titulo da vaga: Suporte técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em GTI, Tecnico de informática</p>
                            <p>Empresa: Tips tecnologia</p>
                            <p>Valor</p>
                            <p>Carga horaria</p>
                            <p>Cidade</p>
                            <p>Cadastrado em:</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Tipo de vaga</span>
                            <p>Cod. vaga 001</p>
                            <p>Titulo da vaga: Suporte técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em GTI, Tecnico de informática</p>
                            <p>Empresa: Tips tecnologia</p>
                            <p>Valor</p>
                            <p>Carga horaria</p>
                            <p>Cidade</p>
                            <p>Cadastrado em:</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Tipo de vaga</span>
                            <p>Cod. vaga 001</p>
                            <p>Titulo da vaga: Suporte técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em GTI, Tecnico de informática</p>
                            <p>Empresa: Tips tecnologia</p>
                            <p>Valor</p>
                            <p>Carga horaria</p>
                            <p>Cidade</p>
                            <p>Cadastrado em:</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </main>

    
    <?php require "src/view/includes/footer.inc.php"; ?>
    <?php require "src/view/includes/modal.inc.php" ?>
    <?php require "src/view/includes/modal2.inc.php" ?>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>