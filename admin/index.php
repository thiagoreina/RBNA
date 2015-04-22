<?php
include_once '../validar.php';

/*
Usuario Normal 		= 0
Administrador 		= 1
Usuario Desativado 	= 2
Uusuario Do RH 		= 3
Usuario de Obra 	= 4
Usuario do Dvin(status)	= 5
*/

//administrador
if($_SESSION["perfil"] == 1){
	
header("location:admin.php");
	}

//Usuario Desativado
elseif($_SESSION["perfil"] == 2){

		
	$msg = "Acesso Negado";
 	header("location:../index.php?msg=".$msg);
}
// Usuario Comum
elseif($_SESSION["perfil"] == 0){

		$msg = "Acesso Negado";
 	header("location:../intranet.php?msg=".$msg);
}
//Usuario de RH
elseif($_SESSION["perfil"] == 3){

header("location:rh.php");
}
//Usuario de Obra
elseif($_SESSION["perfil"] == 4){

header("location:obra.php");
}

//Usuario de Obra
elseif($_SESSION["perfil"] == 5){

header("location:status.php");
}

echo $erro;
?>