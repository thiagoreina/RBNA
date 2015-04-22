<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<style type="text/css">
<!--
.verdana {
	font-family: Verdana, Geneva, sans-serif;
	font-weight: bold;
	color: #666;
	position: relative;
	text-align: center;
}
-->
</style></head>

<body bgcolor="#EEEEEE" class="verdana">
<?php 
include_once '../validar.php';
include_once '../validar_rh.php';
?>
<?php
$id = 		$_GET["id"];


    
include_once '../fontes/conexao.php';
$sql= "select * from usuario where idfunc = ".$id;

$result = mysql_query($sql, $con);
while ($row = mysql_fetch_array($result)){

$perfil = $row["perfil"];
}
if ($perfil==1){
	$attperfil = 0;
}else{
	$attperfil = 1;	
}

$sql2 = "UPDATE usuario SET perfil = ".$attperfil." WHERE idfunc =".$id;


			if(mysql_query($sql2, $con)){
				echo   "Atualizado com Sucesso.";
				 
				
			}else{
				echo  "Erro";
				 
				}
	
	mysql_close($con);
	 


?>
</body>
</html>