<!--
ATUALIZA A PAGINA OU REDIRECIONA
<meta http-equiv=refresh content="5; URL=index.php"> -->


<?php
    //LOGOUT
    session_start();
    session_destroy();

    $msg = "Logout efetuado!";
    //echo $msg;
    header("location:index.php?msg=".$msg);

?>
