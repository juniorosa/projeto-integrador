<?php 

    if(isset($_SESSION['msg'])){
        ?>
        <script>
            window.onload = function(){
                Materialize.toast('<?php echo $_SESSION['msg']; ?>', 5000);
            };
        </script>
        <?php
        unset($_SESSION['msg']);
    }
?>