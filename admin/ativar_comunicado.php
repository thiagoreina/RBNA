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
include_once '../validar_admin.php';
?>
<?php
$id = 		$_GET["id"];


    
include_once '../fontes/conexao.php';
$sql= "SELECT * FROM comunicado WHERE id =".$id;

$result = mysql_query($sql, $con);
while ($row = mysql_fetch_array($result)){

$ativo = $row["ativo"];
}
if ($ativo==1){
	$ativar = 0;
}else{
	$ativar = 1;	
}
$datatime = date('Y-m-j H:m:s');
$sql2 = "UPDATE comunicado SET data = '".$datatime."', ativo = ".$ativar." WHERE id =".$id;


			if(mysql_query($sql2, $con)){
				$msg =  "Atualizado com Sucesso.";
				 
				header("location:edit_comunicado.php?msg=".$msg);
			}else{
				$msg =  "Erro";
				 
				header("location:edit_comunicado.php?msg=".$msg);
				 }
	
	mysql_close($con);
	 


?>
</body>
</html>