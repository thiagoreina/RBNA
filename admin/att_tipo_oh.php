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
$servico = 		$_POST["servico"];
$id = 		$_POST["id"];


    
include_once '../fontes/conexao.php';


$sql2 = "UPDATE tipo_oh SET id = ".$id.",
tipo_oh = '".$servico."' WHERE id =".$id;


			if(mysql_query($sql2, $con)){
				 header("location:cad_tipo_oh.php");
			}else{
				 echo "Erro ao Salvar.";
				 }
	
	mysql_close($con);
	 


?>
<p><a href="cad_tipo_oh.php"> Voltar</a></p>
</body>
</html>