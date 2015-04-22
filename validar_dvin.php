<?php
//Usuario Normal
$perfil_necessario = 5;
if($_SESSION["perfil"] == 1){	
	}elseif($_SESSION["perfil"] <> $perfil_necessario){
	 	header("location:index.php");}
?>
