<?php

session_start();

if(!isset ($_SESSION["idfunc"])){
    session_destroy();

    $msg = "Usuario sem acesso!";
    //echo $msg;
    header("location:../index.php?msg=".$msg);
}

//Usuario Desativado
if($_SESSION["perfil"] == 2){
	 session_destroy();

    $msg = "Usuário Desativado.";
    //echo $msg;
    header("location:../index.php?msg=".$msg);
	
	}
/*	
elseif($_SESSION["tempo"] + 5 * 160 < time()){
    session_destroy();
    $msg = "Favor Efetuar Login";
    header("location:index.php?msg=".$msg);
}else{
    //RENOVAR A SESSAO TEMPO
    $_SESSION["tempo"] = time();
}
	
*/
?>
