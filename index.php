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
    
    <title>Sistema de Divulgação de Estágios e Empregos</title>
</head>

<body>
    <header>
        <div id="inicio" class="navbar-fixed">
            <nav class="green darken-1 z-depth-2">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo">Logo</a>
                        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="large material-icons">menu</i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a class="modal-trigger" href="#modal2">Anunciar vaga</a></li>
                            <li><a href="./src/view/login.php" class="waves-effect btn green darken-2">Login<i class="material-icons right">account_circle</i></a></li>
                        </ul>
                    </div>
                </div>
    
        </div>
        <!-- menu mobile -->
        <ul id="mobile-menu" class="side-nav">
            <li><a class="modal-trigger" href="#modal2">Anunciar vaga</a></li>
            <li><a href="./src/view/login.php">Login</a></li>
    
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
                    <option value="1">Estágio</option>
                    <option value="2">Efetivo (CLT)</option>
                    <option value="3">Temporário</option>
                    <option value="4">Concurso Público</option>
                    <option value="5">Prestador de Serviços</option>
                    <option value="6">Outros</option>
                </select>
                <label>Tipo de contrato</label>
            </div>
			
			<!-- Adicionado cursos do DASS como exemplo -->
            <div class="input-field col s12 l2">
                <select>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Técnico em Desenvolvimento de Sistemas</option>
                    <option value="2">Técnico em Enfermagem</option>
                    <option value="3">Técnico em Informática</option>
                    <option value="4">Técnico em Meteorologia</option>
                    <option value="5">Técnico em Segurança do Trabalho</option>
                    <option value="6">Superior em Gestão da Tecnologia da Informação</option>
                    <option value="7">Superior em Radiologia</option>
                </select>
                <label>Curso</label>
            </div>
			
			<!-- Adicionado cidades da Grande Florianópolis como exemplo -->
            <div class="input-field col s12 l3">
                <select>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Águas Mornas</option>
                    <option value="2">Alfredo Wagner</option>
                    <option value="3">Angelina</option>
                    <option value="4">Anitápolis</option>
                    <option value="5">Antônio Carlos</option>
                    <option value="6">Biguaçu</option>
                    <option value="7">Canelinha</option>
                    <option value="8">Florianópolis</option>
                    <option value="9">Governador Celso Ramos</option>
                    <option value="10">Leoberto Leal</option>
                    <option value="11">Major Gercino</option>
                    <option value="12">Nova Trento</option>
                    <option value="13">Palhoça</option>
                    <option value="14">Paulo Lopes</option>
                    <option value="15">Rancho Queimado</option>
                    <option value="16">Santo Amaro da Imperatriz</option>
                    <option value="17">São Bonifácio</option>
                    <option value="18">São João Batista</option>
                    <option value="19">São José</option>
                    <option value="20">São Pedro de Alcântara</option>
                    <option value="21">Tijucas</option>
                </select>
                <label>Cidade</label>
    
            </div>
    
        </div>
    
    </div>

    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="card medium z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Estágio</span>
                            <p>Cód. vaga: 008</p>
                            <p>Título da vaga: Suporte Técnico</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em Gestão da Tecnologia da Informação, Técnico em Informática</p>
                            <p>Empresa: Tips Tecnologia</p>
                            <p>Valor: R$600,00</p>
                            <p>Carga horária: 20h</p>
                            <p>Cidade: Florianópolis</p>
                            <p>Cadastrado em: 11/10/18</p>
                        </div>
                        <div class="card-action center-align">
                            <a class="modal-trigger" href="#modal1">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card medium z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Estágio</span>
                            <p>Cód. vaga: 007</p>
                            <p>Título da vaga: Suporte Técnico em Redes</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em Gestão da Tecnologia da Informação</p>
                            <p>Empresa: ABC Sistemas</p>
                            <p>Valor: R$700,00</p>
                            <p>Carga horária: 20h</p>
                            <p>Cidade: Florianópolis</p>
                            <p>Cadastrado em: 08/10/18</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card medium z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Efetivo (CLT)</span>
							<p>Cód. vaga: 006</p>
                            <p>Título da vaga: Analista de Sistemas Erp</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em Gestão da Tecnologia da Informação</p>
                            <p>Empresa: Empresa Confidencial</p>
                            <p>Valor: A combinar</p>
                            <p>Carga horária: 44h</p>
                            <p>Cidade: Tijucas</p>
                            <p>Cadastrado em: 05/10/18</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card medium z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Efetivo (CLT)</span>
                            <p>Cód. vaga: 005</p>
                            <p>Título da vaga: Técnico em Informática</p>
                            <p>Cursos relacionados:</p>
                            <p>Técnico em Informática</p>
                            <p>Empresa: Ocupacional TI</p>
                            <p>Valor: A combinar</p>
                            <p>Carga horária: 44h</p>
                            <p>Cidade: Palhoça</p>
                            <p>Cadastrado em: 05/10/18</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card medium z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Estágio</span>
                            <p>Cód. vaga: 004</p>
                            <p>Título da vaga: Estágio - Técnico em Enfermagem</p>
                            <p>Cursos relacionados:</p>
                            <p>Técnico em Enfermagem</p>
                            <p>Empresa: Instituto Euvaldo Lodi</p>
                            <p>Valor: R$500,00</p>
                            <p>Carga horária: 30h</p>
                            <p>Cidade: Florianópolis</p>
                            <p>Cadastrado em: 04/10/18</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card medium z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Efetivo (CLT)</span>
                            <p>Cód. vaga: 003</p>
                            <p>Título da vaga: Técnico em Segurança do Trabalho</p>
                            <p>Cursos relacionados:</p>
                            <p>Técnico em Segurança do Trabalho</p>
                            <p>Empresa: Silver Segurança</p>
                            <p>Valor: A combinar</p>
                            <p>Carga horária: 40h</p>
                            <p>Cidade: Florianópolis</p>
                            <p>Cadastrado em: 03/10/18</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card medium z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Efetivo (CLT)</span>
                            <p>Cód. vaga: 002</p>
                            <p>Título da vaga: Analista de Suporte Avançado</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em Gestão da Tecnologia da Informação</p>
                            <p>Empresa: HostGator América Latina</p>
                            <p>Valor: A combinar</p>
                            <p>Carga horária: 40h</p>
                            <p>Cidade: Florianópolis</p>
                            <p>Cadastrado em: 02/10/18</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
        
                <div class="col s12 m4 l4">
                    <div class="card medium z-depth-4 hoverable">
                        <div class="card-content">
                            <span class="card-title">Prestador de Serviços</span>
							<p>Cód. vaga: 001</p>
                            <p>Título da vaga: Analista de Suporte de TI</p>
                            <p>Cursos relacionados:</p>
                            <p>Superior em Gestão da Tecnologia da Informação, Técnico em Informática</p>
                            <p>Empresa: Top Mind</p>
                            <p>Valor: A combinar</p>
                            <p>Carga horária: 40h</p>
                            <p>Cidade: Florianópolis</p>
                            <p>Cadastrado em: 01/10/18</p>
                        </div>
                        <div class="card-action center-align">
                            <a href="#">Mais informações</a>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </main>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large green" href="#inicio">
            <i class="large material-icons">arrow_upward</i>
        </a>
    </div>
    
    <?php require "src/view/includes/footer.inc.php"; ?>
    <?php require "src/view/includes/modal-info.inc.php" ?>
    <?php require "src/view/includes/modal-anuncio.inc.php" ?>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>