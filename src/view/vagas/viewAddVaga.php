<div class="container">
    <div class="row">
        <form id="cadastro-usuario" class="col s12 m8 l8 offset-m2 offset-l2 hoverable z-depth-5 alinhar-view" action=""
            method="post">
            <h3 class="light center-align">Adicionar Vaga</h3>
            <div class="row">

                <div class="input-field col s12">
                    <input id="titulo-vaga" name="titulo-vaga" type="text" class="validate" required>
                    <label for="titulo-vaga">Titulo da vaga*</label>
                </div>

                <div class="input-field col s12 l6">
                    <select id="id-curso">
                        <option value="" disabled selected>Selecione</option>
                        <option value="1">Estágio</option>
                        <option value="2">Efetivo (CLT)</option>
                        <option value="3">Temporário</option>
                        <option value="4">Concurso Público</option>
                        <option value="5">Prestador de Serviços</option>
                        <option value="6">Outros</option>
                    </select>
                    <label>Tipo de contrato*</label>
                </div>

                <div class="input-field col s12 l4 offset-l2">
                    <input id="duracao-contrato" type="number" name="duracao-contrato" min="0">
                    <label for="duracao-contrato">Duração(meses)</label>
                </div>

                <div class="input-field col s12 l6">
                    <input id="nome-empresa" type="text" name="nome-empresa">
                    <label for="nome-empresa">Nome da empresa</label>
                </div>

                <div class="input-field col s12 l4 offset-l2">
                    <input id="qtd-vagas" type="number" name="qtd-vagas" min="0">
                    <label for="qtd-vagas">Quantidade de vagas</label>
                </div>

                <div class="input-field col s12">
                    <textarea id="atividades" class="materialize-textarea"></textarea>
                    <label for="atividades">Atividades</label>
                </div>
                <div class="col s12">
                    <p>Cursos relacionados</p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="tec-agr" />
                        <label for="tec-agr">Tecnico em Agrimensura</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="tec-edf" />
                        <label for="tec-edf">Tecnico em Edificações</label>
                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="tec-info" />
                        <label for="tec-info">Tecnico em Informatica</label>
                    </p>
                </div>

                <div class="input-field col s12 l4 ">
                    <input id="fase-min" type="number" name="fase-min" min="0">
                    <label for="fase-min">Fase mínima</label>
                </div>

                <div class="input-field col s12">
                    <textarea id="req" class="materialize-textarea"></textarea>
                    <label for="req">Requisitos</label>
                </div>

                <div class="input-field col s12 l4">
                    <input id="valor" type="number" name="valor" min="0">
                    <label for="valor">Valor</label>
                    <p>
                        <input type="radio" name="salario"  id="valor-combinar" />
                        <label for="valor-combinar">A combinar</label>
                    </p>

                    <p>
                        <input type="radio" name="salario"  id="nao-fornecido" />
                        <label for="nao-fornecido">Não fornecido</label>
                    </p>
                </div>

                <div class="col s12 l4 offset-l2">
                    <p>Beneficios</p>
                    <p>
                        <input type="checkbox" class="filled-in" id="asssitencia-med" />
                        <label for="asssitencia-med">Assitencia médica</label>
                    </p>

                    <p>
                        <input type="checkbox" class="filled-in" id="aux-alimentacao" />
                        <label for="aux-alimentacao">Auxilio alimentação</label>
                    </p>

                    <p>
                        <input type="checkbox" class="filled-in" id="aux-transporte" />
                        <label for="aux-transporte">Auxilio transporte</label>
                    </p>

                    <p>
                        <input type="checkbox" class="filled-in" id="conv-farmacia" />
                        <label for="conv-farmacia">Convênio com farmácias</label>
                    </p>

                    <p>
                        <input type="checkbox" class="filled-in" id="curso-idiomas" />
                        <label for="curso-idiomas">Curso de idiomas</label>
                    </p>

                    <p>
                        <input type="checkbox" class="filled-in" id="outros" />
                        <label for="outros">Outros</label>
                    </p>
                    
                </div>

                <div class="input-field col s12 l6">
                    <select id="turno">
                        <option value="" disabled selected>Selecione</option>
                        <option value="1">Matutino</option>
                        <option value="2">Vespertino</option>
                        <option value="3">Noturno</option>
                        <option value="4">Integral</option>
                        <option value="5">A combinar</option>
                        
                    </select>
                    <label>Turno</label>
                </div>

                <div class="input-field col s12 l4 offset-l2">
                    <p>
                        <input type="checkbox" class="filled-in" id="vaga-def" />
                        <label for="vaga-def">Disponível para pessoa com deficiência</label>
                    </p>
                
                </div>

                <div class="col s12">
                    <p>Carga horaria</p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="10" />
                        <label for="10">10h</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="15" />
                        <label for="15">15h</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="20" />
                        <label for="20">20h</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="25" />
                        <label for="25">25h</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="30" />
                        <label for="30">30h</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="35" />
                        <label for="35">35h</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="40" />
                        <label for="40">40h</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="44" />
                        <label for="44">44h</label>

                    </p>
                </div>

                <div class="col s12 l4">
                    <p>
                        <input type="checkbox" class="filled-in" id="combinar-hora" />
                        <label for="combinar-hora">A combinar</label>

                    </p>
                </div>

                <div class="input-field col s12 l4">
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

                <div class="input-field col s12 l8">
                    <input id="end" name="end" type="text">
                    <label for="end">Endereço</label>
                </div>

                 <div class="input-field col s12 l6">
                    <input id="email" name="email" type="email">
                    <label for="emaiç">Email</label>
                </div>

                 <div class="input-field col s12 l6">
                    <input id="fone" name="fone" type="number">
                    <label for="fone">Telefone</label>
                </div>
                
            </div>
            <button class="btn btn-form waves-effect waves-light green darken-3" type="submit" name="cadastrar-vaga">Cadastrar</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
    $('select').material_select();
  });
</script>