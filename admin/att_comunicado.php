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
include_once '../fontes/conexao.php';
?>
<?php

    

$comunicado =	 	nl2br($_POST["comunicado"]);
$ativar = $_POST["ativar"];
$id = $_POST["id"];

$datatime = date('Y-m-j H:m:s');
$sql2 = "UPDATE comunicado SET comunicado = '".$comunicado."', ativo = ".$ativar." WHERE id =".$id;


			if(mysql_query($sql2, $con)){
				print "<script type='text/javascript'>";
print "alert('Comunicado Atualizado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				}else{
				echo  "Erro";
				}
	mysql_close($con);
	 


?>
</body>
</html>