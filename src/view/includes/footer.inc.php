
<footer class="green darken-2 page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Nome do sistema</h5>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
         <span>Desenvolvido por Nome da empresa</span>
      </div>
    </div>
</footer>
    
  
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        //botão da barra lateral
        $('.button-collapse').sideNav();
        //ativa a modal
        $('.modal').modal({
            dismissible: false,
            opacity: .5,
            inDuration: 300,
            outDuration: 200,
            startingTop: '2%'     
            }
        );
        $('select').material_select();
    });
</script>