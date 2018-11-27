<div class="container">
    <div class="row">
        <form id="cadastro-curso" class="col s12 m8 l8 offset-m2 offset-l2 hoverable z-depth-5 alinhar-view" action=""
            method="post">
            <h3 class="light center-align">Alterar Curso</h3>
            <div class="row">

                <div class="input-field col s12">
                    <input id="nome" name="nome" type="text" class="validate" required>
                    <label for="nome">Nome do curso*</label>
                </div>

                <div class="input-field col s12">
                    <input id="cod" name="cod" type="text" class="validate" required>
                    <label for="cod">Codigo do curso*</label>
                </div>

                <div class="input-field col s12">
                    <input id="dep" name="dep" type="text">
                    <label for="dep">Departamento</label>
                </div>

                <div class="input-field col s12">
                    <input id="curriculo" name="curriculo" type="text">
                    <label for="curriculo">Curriculo do curso</label>
                </div>

                <div class="input-field col s12">
                    <input id="rec" name="rec" type="text">
                    <label for="rec">Reconhecimento do curso</label>
                </div>
                
                <div class="input-field col s12 l4">
                    <input id="ch" name="ch" type="number" min="0">
                    <label for="ch">Carga horaria total</label>
                </div>

                <div class="input-field col s12 l4 offset-l2">
                    <select id="turno">
                        <option value="" disabled selected>Selecione</option>
                        <option value="1">Matutino</option>
                        <option value="2">Vespertino</option>
                        <option value="3">Noturno</option>
                    </select>
                    <label>Turno</label>
                </div>

            </div>
            <button class="btn btn-form waves-effect waves-light green darken-3" type="submit" name="alterar-curso">Alterar</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
    $('select').material_select();
  });
</script>