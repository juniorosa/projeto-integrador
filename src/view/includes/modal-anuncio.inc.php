 <!-- Modal estrutura-->
 <div id="modal2" class="modal">
    <div class="modal-content">
    <h4 class="center-align">Anunciar Vaga</h4>
        <p class="center-align">Informações a respeito do anuncio de vagas</p>
        <div class="container-modal">
            <form >
                <div class="input-field input-modal">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Nome</label>
                </div>
                <div class="input-field input-modal">
                <i class="material-icons prefix">email</i>
                <input id="icon_email" type="email" class="validate">
                <label for="icon_email">Email</label>
                </div>

                <div class="input-field input-modal">
                <select>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Anunciar vaga</option>
                    <option value="1">Atualizar dados da vaga</option>
                    <option value="6">Outros</option>
                </select>
                <label>Assunto</label>

                </div>

                <div class="input-field input-modal">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                    <label for="icon_prefix2">Mensagem</label>
                </div>

            <button id="btn-modal" class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
            </form>
        
    </div>
    
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close btn-flat">Fechar</a>
    </div>
  </div>