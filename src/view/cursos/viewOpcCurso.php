<h1 class="center-align light">Alterar cursos</h1>
<table class="bordered highlight centered">
    <thead>
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Departamento</th>
            <th>Turno</th>
            <th>Curriculo</th>
            <th>Reconhecimento</th>
            <th>Carga horária</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>126</td>
            <td>Técnico em informática</td>
            <td>DASS</td>
            <td>Vespertino</td>
            <td>0126 -</td>
            <td>N° 027/2008/CD</td>
            <td>1200</td>
            <td><a id="altera-curso" href="#" class="btn-floating tooltipped blue" data-position="left" data-delay="50" data-tooltip="Alterar"><i class="material-icons">edit</i></a></td>
        </tr>
       

    </tbody>
</table>

<script>
     $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
         
    $('#altera-curso').click(function(){
        $('main').load('cursos/viewAlteraCurso.php');
        $('.tooltipped').tooltip('remove');
    });
  });
</script>