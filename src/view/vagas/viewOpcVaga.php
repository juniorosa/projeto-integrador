<h1 class="center-align light">Alterar ou remover vagas</h1>
<table class="bordered highlight centered">
    <thead>
        <tr>
            <th>Cod</th>
            <th>Titulo</th>
            <th>Tipo de contrato</th>
            <th>Cidade</th>
            <th>Data</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>003</td>
            <td>Suporte técnico</td>
            <td>Estagio</td>
            <td>Florianopolis</td>
            <td>11/10/18</td>
            <td><a href="#modal-excluir-vaga" class="btn-floating modal-trigger tooltipped red" data-position="left" data-delay="50" data-tooltip="Excluir"><i class="material-icons">delete</i></a></td>
            <td><a id="altera-vaga" href="#" class="btn-floating tooltipped blue" data-position="left" data-delay="50" data-tooltip="Alterar"><i class="material-icons">edit</i></a></td>
        </tr>
        <tr>
            <td>004</td>
            <td>Suporte técnico</td>
            <td>Efetivo (CLT)</td>
            <td>Florianopolis</td>
            <td>15/10/18</td>
            <td><a href="#modal-excluir-vaga" class="btn-floating modal-trigger tooltipped red" data-position="left" data-delay="50" data-tooltip="Excluir"><i class="material-icons">delete</i></a></td>
            <td><a href="#" class="btn-floating tooltipped blue" data-position="left" data-delay="50" data-tooltip="Alterar"><i class="material-icons">edit</i></a></td>
        </tr>
        <tr>
            <td>005</td>
            <td>Tecnico em informatica</td>
            <td>Efetivo (CLT)</td>
            <td>Palhoça</td>
            <td>19/10/18</td>
            <td><a href="#modal-excluir-vaga" class="btn-floating modal-trigger tooltipped red" data-position="left" data-delay="50" data-tooltip="Excluir"><i class="material-icons">delete</i></a></td>
            <td><a href="#" class="btn-floating tooltipped blue" data-position="left" data-delay="50" data-tooltip="Alterar"><i class="material-icons">edit</i></a></td>
        </tr>

    </tbody>
</table>

<script>
     $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
          // tela de alterar vagas
    // tela de alterar vagas
    $('#altera-vaga').click(function(){
        $('main').load('vagas/viewAlteraVaga.php');
        $('.tooltipped').tooltip('remove');
    });
  });
</script>