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
$setor = 		$_POST["setor"];
$id = 		$_POST["id"];


    
include_once '../fontes/conexao.php';


$sql2 = "UPDATE setor SET id = ".$id.",
setor = '".$setor."' WHERE id =".$id;


			if(mysql_query($sql2, $con)){
				print "<script type='text/javascript'>";
print "alert('Setor Atualizado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
			}else{
				 echo "Erro ao Salvar.";
				 }
	
	mysql_close($con);
	 


?>
</body>
</html>