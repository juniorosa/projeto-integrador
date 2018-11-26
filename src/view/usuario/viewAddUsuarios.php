<div class="container">
    <div class="row">
        <form id="cadastro-usuario" class="col s12 m8 l8 offset-m2 offset-l2 hoverable z-depth-5 alinhar-view" action=""
            method="post">
            <h3 class="light center-align">Adicionar usuario</h3>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">face</i>
                    <input id="nome" name="nome" type="text" class="validate" required>
                    <label for="nome">Nome*</label>
                </div>
                
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email">Email*</label>
                </div>
                
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment</i>
                    <input id="matricula" name="matricula" type="number" class="validate" required>
                    <label for="matricula">Matricula*</label>
                </div>
                
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="login" name="login" type="text" class="validate" required>
                    <label for="login">Login*</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="senha" name="senha" type="password" class="validate" required>
                    <label for="senha">Senha*</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="confirme-senha" name="confirme-senha" type="password" class="validate" required>
                    <label for="confirme-senha">Confirme sua senha*</label>
                </div>

            </div>
            <button class="btn btn-form waves-effect waves-light green darken-3" type="submit" name="cadastrar-usuario">Cadastrar</button>
        </form>
    </div>
</div>