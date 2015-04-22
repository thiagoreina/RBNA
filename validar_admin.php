<?php

if($_SESSION["perfil"] == 1){
	

}else{
	$msg = "Você não é um Administrador da Página";
    //echo $msg;
    header("location:../intranet.php?msg=".$msg);

}

?>
