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
$id = 		$_POST["id"];
$tipo = 		$_POST["tipo"];
$grupo = 		base64_decode($_POST["grupo"]);

    
include_once '../fontes/conexao.php';

$sql2 = "select * from tiporelatorio where tipo LIKE '".$tipo."' and grupo LIKE '".$grupo."'";
$result =(mysql_query($sql2,$con));
if (mysql_num_rows($result)>0){
	
	$msg= "Este Tipo já Existe! ";
	
	$msg = base64_encode($msg);
	$grupo = base64_encode($grupo);
    //echo $msg;
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);

	
	
}else{
	
	
$sql2 = "UPDATE tiporelatorio SET tipo = '".$tipo."' WHERE id =".$id;

				if (mysql_query($sql2,$con)){
$msg = "Atualizado com Sucesso!";
 
  $msg = base64_encode($msg);
  $grupo = base64_encode($grupo);
    
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);

}else{
$msg = "Erro ao Atualizar";

	$msg = base64_encode($msg);
 	$grupo = base64_encode($grupo);
    
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);
}
	
	mysql_close($con);
	 

}
?>
</body>
</html>